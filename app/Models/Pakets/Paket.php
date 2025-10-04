<?php

namespace App\Models\Pakets;


use App\Models\Servers\Mikrotik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Paket extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $cascadeDeletes = ['customer_pakets'];
    protected $dates = ['deleted_at'];
    protected $fetchMethod = 'get'; // get, cursor, lazy or chunk

    public $guarded = [];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function paket_profile(): BelongsTo
    {
        return $this->belongsTo(PaketProfile::class);
    }

    public function mikrotik(): BelongsTo
    {
        return $this->belongsTo(Mikrotik::class);
    }

    public function customer_pakets(): HasMany
    {
        return $this->hasMany(\App\Models\Customers\CustomerPaket::class);
    }

    public function customer_ppp_pakets(): HasManyThrough
    {
        return $this->hasManyThrough(
            \App\Models\Customers\CustomerPppPaket::class,
            \App\Models\Customers\CustomerPaket::class,
            'paket_id',
            'customer_paket_id',
            'id',
            'id'
        );
    }

    public function customer_static_pakets(): HasManyThrough
    {
        return $this->hasManyThrough(
            \App\Models\Customers\CustomerStaticPaket::class,
            \App\Models\Customers\CustomerPaket::class,
            'paket_id',
            'customer_paket_id',
            'id',
            'id'
        );
    }




}
