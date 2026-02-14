<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'sku',
        'taxable',
        'category_id',
        'image_path',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'quantity' => 'decimal:3',
        'taxable' => 'boolean',
    ];
}
