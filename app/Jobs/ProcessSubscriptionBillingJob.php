<?php

namespace App\Jobs;

use App\Http\Controllers\GeneralLogType;
use App\Services\GeneralLogServices;
use Illuminate\Bus\Queueable;
use App\Traits\CaptureIpTrait;
use Illuminate\Support\Facades\Log;
use App\Services\CustomerPaketService;
use Illuminate\Queue\SerializesModels;
use App\Models\Customers\CustomerPaket;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\Billings\BillingService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\WhatsappGateway\WhatsappNotificationService;

class ProcessSubscriptionBillingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(
        BillingService $billingService,
        CustomerPaketService $customerPaketService,
        WhatsappNotificationService $whatsappNotificationService,
        GeneralLogServices $generalLogServices
        )
    {
       // Log::info('ProcessSubscriptionBillingJob...');
       $generalLogServices->job_process('Process Subscription Billing Job...');
        CustomerPaket::where('status', 'active')
            ->where('auto_renew', true)
            ->get()
            ->each(function ($customerPaket) use ($billingService, $customerPaketService, $whatsappNotificationService, $generalLogServices) {
                $autoIsolir = $customerPaket->paket->mikrotik->auto_isolir;
                //Auto Isolir
                if (!$autoIsolir->disabled) {
                    Log::info('Processing auto isolir job...');
                    $customerPaketStatus = $customerPaket->checkSubscriptionStatus();

                    //Deactivated if test
                    //Isolir customer
                    if ($customerPaketStatus === 'expired') {
                      //  Log::info($customerPaket->user->full_name . ' set to Expired');

                        $isolirCustomerPaket = false;
                        if ($customerPaket->isPpp()) $isolirCustomerPaket = $customerPaketService->isolir_secret_ppp_on_mikrotik($customerPaket);
                        if ($customerPaket->isPpp()) $isolirCustomerPaket = $customerPaketService->isolir_paket_static_on_mikrotik($customerPaket);


                        $customerDetail = $customerPaket->user->user_address;
                        //Deactivated if test
                        if ($isolirCustomerPaket) {
                            //Send WA Notification to customer
                            if (!is_null($customerDetail->phone)) {
                                $whatsappNotificationService->sendIsolirNotification($customerPaket);
                                $generalLogServices->send_customer_notification($customerPaket, $generalLogServices::NOTIFIACTION_EXPIRED);
                            }
                            //Create log customer expired
                            $generalLogServices->expired($customerPaket);
                        }
                        $whatsappNotificationService->sendAdminNotification($customerPaket->user->full_name . ' ' . $customerDetail->address . ' set to Expired');
                    }
                }

                //Create invoice
                if ($customerPaket->needsBilling()) {
                    //Log::info($customerPaket->user->full_name . ' create invoice');
                    $billingService->generateInvoice($customerPaket);

                }
            });
    }
}
