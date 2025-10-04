<?php

namespace App\Services\Payments;

use Illuminate\Support\Carbon;
use App\Models\Billings\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Billings\PaymentHistory;
use App\Services\WhatsappGateway\WhatsappNotificationService;

class CancelPartialPaymentService
{
    private $maxRetries = 3;
    private $retryDelay = 5; // seconds
    protected $whatsappNotificationService;

    private $supportedMethods = [
        'cash',
        'paylater',
        'bank_transfer',
    ];

    public function __construct(WhatsappNotificationService $whatsappNotificationService)
    {
        $this->whatsappNotificationService = $whatsappNotificationService;
    }

    private function validatePaymentMethod($method)
    {
        return in_array($method, $this->supportedMethods);
    }

    public function processCancelPayment(Payment $payment, float $amount)
    {
        if (!$this->validatePaymentMethod($payment->payment_method)) {
            return [
                'success' => false,
                'message' =>  'Unsupported payment method: ' . $payment->payment_method
            ];
        }

        if (!$payment->isCancelled()) {
            return ['success' => false, 'message' => 'This payment cant cancelled.'];
        }

        if ($amount > $payment->amount) {
            return ['success' => false, 'message' => 'Amount cannot exceed the original payment amount.'];
        }

        DB::beginTransaction();
        try {
            $invoice = $payment->invoice;
            $updateMikrotik = $this->updateMikrotik($payment);
            if ($updateMikrotik['success']) {
                $this->updateInvoiceStatus($invoice, $payment->amount);

                $previousPayment = Payment::whereInvoiceId($payment->invoice_id)->where('id', '<', $payment->id)->orderby('id', 'desc')->first();
                $paylaterDate = $previousPayment ? ($previousPayment->payment_method === 'paylater' ? $previousPayment->paylater_date : null) : null;
                $this->updateCustomerPaket($invoice->customer_paket, $invoice->start_periode, $paylaterDate);
                PaymentHistory::wherePaymentId($payment->id)->delete();

                // $customerDetail = $invoice->customer_paket->user->user_address;
                // if($customerDetail->wa_notification && $customerDetail->phone != null){
                $this->whatsappNotificationService->sendUnpaymentNotification($payment);
                // }

                $payment->delete();
                DB::commit();

                return ['success' => true, 'message' => 'Cancel payment processed successfully.'];
            } else {
                DB::rollBack();
                return $updateMikrotik;
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return ['success' => false, 'message' => 'Cancel payment failed: ' . $e->getMessage()];
        }
    }

    private function updateInvoiceStatus($invoice, $amount)
    {
        $totalPaid = $invoice->payments->sum('amount');
        $totalRefunded = $invoice->payments->sum('refunded_amount');
        $netPaid = $totalPaid - $totalRefunded - $amount;
        if ($netPaid <= 0) {
            $invoice->status = 'pending';
        } elseif ($netPaid < $invoice->amount) {
            $invoice->status = 'partially_paid';
        }
        $invoice->paid_at = null;
        $invoice->save();
    }

    private function updateCustomerPaket($customerPaket, $startPeriode, $paylaterDate)
    {
        //$customerPaket = $invoice->customer_paket;
        $customerPaket->forceFill([
            // 'status' => 'expired',
            'start_date' => Carbon::parse($startPeriode)->sub($customerPaket->getRenewalPeriod()),
            'expired_date' => $startPeriode,
            'paylater_date' => $paylaterDate
        ])->save();
        $customerPaket->setSubscriptionStatus();
        // return ['success' => true];
    }

    private function updateMikrotik($payment)
    {
        $retries = 0;
        while ($retries < $this->maxRetries) {
            try {
                $updateMikrotikResult = (new MikrotikPaymentService())->mikrotik_unpayment_process($payment);
                if (!$updateMikrotikResult['success']) return [
                    'success' => false,
                    //'message' => throw new \Exception($updateMikrotikResult['message'])
                    'message' => $updateMikrotikResult['message']
                ];

                return ['success' => true];
            } catch (\Exception $e) {
                $retries++;
                Log::warning('Update status cancel payment mikrotik failed', [
                    'mikrotik' => $payment->invoice->customer_paket->paket->mikrotik->name,
                    'invoice_id' => $payment->invoice->id,
                    'payment_id' => $payment->id,
                    'error' => $e->getMessage()
                ]);

                if ($retries >= $this->maxRetries) {
                    Log::error('Update status cancel payment mikrotik failed after max retries', [
                        'mikrotik' => $payment->invoice->customer_paket->paket->mikrotik->name,
                        'invoice_id' => $payment->invoice->id,
                        'payment_id' => $payment->id,
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString()
                    ]);
                    throw $e;
                }

                sleep($this->retryDelay);
            }
        }
    }
}
