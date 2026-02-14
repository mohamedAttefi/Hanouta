<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'product_name',
        'quantity',
        'total',
        'status',
        'sold_at',
    ];

    protected $casts = [
        'sold_at' => 'datetime',
        'quantity' => 'decimal:3',
        'total' => 'decimal:2',
    ];
}
