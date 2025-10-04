<?php

namespace App\Models\Billings;

use App\Models\Billings\Invoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
     use SoftDeletes;
    public $guarded = [];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    public function isRefundable()
    {
        return $this->refund_status === 'none' || $this->refund_status === 'partial';
    }

    public function isCancelled()
    {
        return $this->payment_method === 'cash' || $this->payment_method === 'bank_transfer' || $this->payment_method === 'paylater';
    }
}
