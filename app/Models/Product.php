<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'price',
        'category',
        'image_url',
        'in_stock',
        'quantity',
        'seller_id',
        'sold_quantity',
        'total_revenue'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'in_stock' => 'boolean',
        'quantity' => 'integer',
        'sold_quantity' => 'integer',
        'total_revenue' => 'decimal:2'
    ];

    public function getNameAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->name_ar : ($this->name_en ?? $this->name_ar);
    }

    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->description_ar : ($this->description_en ?? $this->description_ar);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function recordSale($quantity)
    {
        $this->sold_quantity += $quantity;
        $this->total_revenue += $this->price * $quantity;
        $this->quantity -= $quantity;
        
        if ($this->quantity <= 0) {
            $this->in_stock = false;
            $this->quantity = 0;
        }
        
        $this->save();
    }
}
