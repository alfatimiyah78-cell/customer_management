<?php

namespace App\Livewire\Actions\Billings;

use App\Traits\Billing;
use App\Models\Websystem;
use Illuminate\Support\Str;
use App\Traits\GenerateName;
use Illuminate\Support\Carbon;
use App\Models\Billings\Invoice;
use Illuminate\Support\Facades\Log;
use App\Services\GeneralLogServices;
use Illuminate\Support\Facades\Auth;
use App\Services\Billings\TaxService;
use App\Models\Customers\CustomerPaket;
use Illuminate\Support\Facades\Storage;
use App\Services\Billings\PricingService;
use App\Services\Billings\DeadlineService;




class InvoiceAction
{
    use Billing;
    use GenerateName;

    protected $pricingService;
    protected $deadlineService;
    protected $generalLogServices;
    public function __construct(PricingService $pricingService = null, DeadlineService $deadlineService = null, GeneralLogServices $generalLogServices = null)
    {
        $this->pricingService = $pricingService ?? new PricingService();
        $this->deadlineService = $deadlineService ?? new DeadlineService();
         $this->generalLogServices = $generalLogServices ?? new GeneralLogServices();
    }
    /**
     * Add customer paket
     *
     * @param  array<string, string>  $input
     */
    public function create_invoice(CustomerPaket $customerPaket, $invoiceNumber): Invoice
    {
        // $taxRate = Websystem::first()->tax_rate;
        //$tax = ($customerPaket->price - $customerPaket->discount) * $taxRate / 100;
        //Chex customer paket invoice in this periode

        $deletedBilling = Invoice::onlyTrashed()->where('customer_paket_id', $customerPaket->id)->where('periode', Carbon::now()->startOfMonth())->first();
        if ($deletedBilling) {
            $deletedBilling->forceDelete();
        }
        if (Websystem::first()->subscription_mode == 'pascabayar') {
            $startPeriode = $customerPaket->start_date;
            // $deadline = $endPeriode = $customerPaket->expired_date;
            $endPeriode = $customerPaket->expired_date;
            $lastBill = now();
            $deadline = $this->deadlineService->calculateDeadline($customerPaket);
        } else {
            $startPeriode = $customerPaket->expired_date;
            //$deadline = $endPeriode = Carbon::parse($customerPaket->expired_date)->add($customerPaket->getRenewalPeriod());
            $endPeriode = Carbon::parse($customerPaket->expired_date)->add($customerPaket->getRenewalPeriod());

            //$lastBill = Carbon::parse($startPeriode)->subDays(7);
            $intervalDateInvoice = 7;
            $startDate = Carbon::parse($startPeriode)->format('d');
            $month = Carbon::now()->addDays($intervalDateInvoice)->format('m');
            $lastBill = Carbon::now()->setMonth((int)$month)->setDay((int)$startDate)->endOfDay();
            $lastBill = $lastBill->subDays($intervalDateInvoice)->startOfDay();
        }
        $deadline = Websystem::first()->subscription_mode == 'pascabayar' ?  $this->deadlineService->calculateDeadline($customerPaket) : $customerPaket->expired_date;



        $invoicePeriode = Carbon::now()->startOfMonth();
        $invoice = Invoice::create([
            'user_customer_id' => $customerPaket->user->user_customer->id,
            'customer_paket_id' => $customerPaket->id,
            'periode' => $invoicePeriode,
            'invoice_number' => $invoiceNumber,
            'issue_date' => now(),
            'due_date' => $deadline,
            'start_periode' => $startPeriode,
            'end_periode' => $endPeriode,
            // 'tax' => $tax,
            'status' => 'pending',
        ]);

        $customerPaket->forceFill([
            'last_billed_at' => $lastBill
        ])->save();
         $this->generalLogServices->create_invoice($customerPaket, $invoicePeriode, Auth::user()? Auth::user()->full_name : 'system');
        //Log::info(Carbon::parse($lastBill)->format('d F Y'));

        return  $invoice;
    }

    public function add_discount(Invoice $invoice, $discount)
    {
        try {
            // $taxRate = Websystem::first()->tax_rate;
            // $tax = ($invoice->amount - $discount) * $taxRate / 100;
            $discount = $invoice->discount + $discount;
            $tax = (new TaxService)->calculateTax($invoice->amount - $discount);

            $invoice->update([
                'discount' => $discount,
                'tax' => $tax
            ]);
            return [
                'success' => true,
                'data' => $invoice
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    public function delete_billing(Invoice $invoice)
    {
        try {
            $directoryInvoice = 'invoices';
            if (Storage::disk('local')->exists($directoryInvoice . '/' . $invoice->invoice_path)) {
                Storage::disk('local')->delete($directoryInvoice . '/' . $invoice->invoice_path);
            }

            $invoice->forceDelete();
            // $billing->delete();
            return true;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
