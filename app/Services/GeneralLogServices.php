<?php

namespace App\Services;

use App\Models\GeneralLog;
use Illuminate\Support\Carbon;

class GeneralLogServices
{

    public const CUSTOMER_PAKET_EXPIRED = 'customer_paket_expired';
    public const SEND_CUSTOMER_NOTIFICATION = 'send_customer_notification';
    public const NOTIFIACTION_EXPIRED = 'expired';
    public const NOTIFIACTION_DUEDATE = 'duedate';
    public const NOTIFIACTION_REMINDER_PAYMENT = 'reminder';
    public const CREATE_INVOICE = 'create_invoice';

    public const JOB_PROCESS = 'job_process';
    public const DELETE_CUSTOMER = 'delete_customer';
    public const RESTORE_CUSTOMER = 'restore_customer';
    public const DELETE_CUSTOMER_PAKET = 'delete_customer_paket';
    public const RESTORE_CUSTOMER_PAKET = 'restore_customer_paket';

    public function expired($customerPaket, $author = 'system')
    {
        $logData = array(
            [
                "user_id" => $customerPaket->user->id,
                "log_history" => $customerPaket->user->full_name." Set to expired"
            ]
        );
        $input = [
            'log_type' => self::CUSTOMER_PAKET_EXPIRED,
            'log_data' => $logData,
            'author' => $author
        ];
        $this->createLog($input);

    }

    public function send_customer_notification($customerPaket, $typeNotification, $author  = 'system')
    {
        switch ($typeNotification) {
            case self::NOTIFIACTION_EXPIRED:
                $logHistory = "Send notification expired to ";
                break;
            case self::NOTIFIACTION_DUEDATE:
                $logHistory = "Send notification duedate payment to ";
                break;
            case self::NOTIFIACTION_REMINDER_PAYMENT:
                $logHistory = "Send notification reminder payment to ";
                break;
            default:
                $logHistory = "Send notification to ";
        }
        $logData = array(
            [
                "user_id" => $customerPaket->user->id,
               // "full_name" => $customerPaket->user->full_name,
                "log_history" => $logHistory.$customerPaket->user->full_name
            ]
        );
        $input = [
            'log_type' => self::SEND_CUSTOMER_NOTIFICATION,
            'log_data' => $logData,
            'author' => $author
        ];
        $this->createLog($input);

    }

    public function create_invoice($customerPaket, $periode, $author  = 'system')
    {
        $logData = array(
            [
                "user_id" => $customerPaket->user->id,
               // "full_name" => $customerPaket->user->full_name,
                "log_history" => $customerPaket->user->full_name." Create invoice ". Carbon::parse($periode)->format('F Y')
            ]
        );
        $input = [
            'log_type' => self::CREATE_INVOICE,
            'log_data' => $logData,
            'author' => $author
        ];
        $this->createLog($input);

    }

    public function job_process($jobCommand, $author = 'system')
    {
        $logData = array(
            [
                "log_history" => $jobCommand
            ]
        );
        $input = [
            'log_type' => self::JOB_PROCESS,
            'log_data' => $logData,
            'author' => $author
        ];
        $this->createLog($input);
    }

    public function admin_action($logType, $action, $author)
    {
        $logData = array(
            [
                "log_history" => $action
            ]
        );
        $input = [
            'log_type' => $logType,
            'log_data' => $logData,
            'author' => $author
        ];
        $this->createLog($input);

    }

    private function createLog($input){
        GeneralLog::create($input);
    }
}
