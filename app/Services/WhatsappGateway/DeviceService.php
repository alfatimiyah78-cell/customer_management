<?php

namespace App\Services\WhatsappGateway;

use App\Traits\WhatsappGatewayTrait;
use Illuminate\Support\Facades\Cache;
use App\Services\WhatsappGateway\GatewayApiService;


class DeviceService
{
    use WhatsappGatewayTrait;
    public function getDevices()
    {
        $devices =  Cache::remember('whatsapp-gateway-device', now()->addMinutes(15), function () {
           // $deviceURL = $this->devicesUrl();
            $getDevices = (new GatewayApiService())->getRequest(WhatsappGatewayTrait::DEVICES);
            return json_decode($getDevices->getBody()->getContents(), true);
        });
        if ($devices['success']) {
            return $devices['data']['devices'];
        }
        Cache::forget('whatsapp-gateway-device');
        //return [];

    }

    public function getOnlineDevices()
    {
        $devices =  $this->getDevices();
        return collect($devices)->where('status', 'Connected')->toArray();
    }
}
