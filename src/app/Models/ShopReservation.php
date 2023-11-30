<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShopReservation extends Model
{
    use HasFactory;

    const RESERVATION_COMPLETE_STATUS = 1;

    protected $fillable = [
        'user_id',
        'shop_id',
        'reservation_date',
        'reservation_time',
        'party_size',
        'status',
    ];

    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}
