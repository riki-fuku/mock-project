<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shop_area_id',
        'shop_genre_id',
        'description',
        'capacity',
    ];

    public function shop_area(): BelongsTo
    {
        return $this->belongsTo(ShopArea::class, 'shop_area_id');
    }

    public function shop_genre(): BelongsTo
    {
        return $this->belongsTo(ShopGenre::class, 'shop_genre_id');
    }
}
