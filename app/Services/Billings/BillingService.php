<?php

namespace App\Services\Billings;

use Illuminate\Support\Carbon;
use App\Models\Billings\Invoice;
use Illuminate\Support\Facades\DB;
use App\Models\Billings\InvoiceItem;
use App\Services\Billings\TaxService;
use App\Services\CustomerPaketService;
use App\Models\Customers\CustomerPaket;
use App\Services\Payments\PaymentService;
use App\Services\Billings\PricingService;
use App\Services\Billings\DeadlineService;
use App\Services\Mikrotiks\MikrotikPppService;
use App\Livewire\Actions\Billings\InvoiceAction;
use App\Services\WhatsappGateway\WhatsappNotificationService;


class BillingService
{
    protected $pricingService, $deadlineService, $customerPaketService, $whatsappNotificationService, $paymentService;
    protected $taxService;
    public function __construct(
        PricingService $pricingService = null,
        DeadlineService $deadlineService = null,
        CustomerPaketService $customerPaketService = null,
        WhatsappNotificationService $whatsappNotificationService = null,
        PaymentService $paymentService = null,
        TaxService $taxService = null
    ) {
        $this->pricingService = $pricingService ?? new PricingService();
        $this->deadlineService = $deadlineService ?? new DeadlineService();
        $this->customerPaketService = $customerPaketService ?? new CustomerPaketService();
        $this->whatsappNotificationService = $whatsappNotificationService ?? new WhatsappNotificationService();
        $this->paymentService = $paymentService ?? new PaymentService();
        $this->taxService = $taxService ?? new TaxService();
    }
    public function generateInvoice(CustomerPaket $customerPaket)
    {
        // Create invoice with calculated amount
        $invoice = (new InvoiceAction())->create_invoice(
            $customerPaket,
            $this->generateInvoiceNumber()
        );
        $this->generateItemInvoice($invoice);
        return $invoice;
    }

    protected function generateItemInvoice(Invoice $invoice)
    {
        // Create invoice with calculated amount
        InvoiceItem::create([
            'invoice_id' => $invoice->id,
            'item' => $invoice->customer_paket->paket->name . ' - ' . Carbon::parse($invoice->customer_paket->start_periode)->format('d F Y') . ' - ' . Carbon::parse($invoice->customer_paket->end_periode)->format('d F Y'),
            'price' => $invoice->customer_paket->price,
            'discount' => $invoice->customer_paket->discount,
            'tax' => $this->taxService->calculateTax($invoice->customer_paket->price - $invoice->customer_paket->discount)
        ]);

        $invoice->amount =  $invoice->invoice_items()->sum('price');
        $invoice->tax = $invoice->invoice_items()->sum('tax');
        $invoice->discount = $invoice->invoice_items()->sum('discount');
        $invoice->save();
        return $invoice;
    }

    private function generateInvoiceNumber()
    {
        return 'INV-' . Carbon::now()->format('dmY') . strtoupper(uniqid());
    }
}
