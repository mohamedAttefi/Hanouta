<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'description' => $this->description,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'price' => $this->price,
            'formatted_price' => number_format($this->price, 2) . ' درهم',
            'category' => $this->category,
            'image_url' => $this->image_url,
            'in_stock' => $this->in_stock,
            'quantity' => $this->quantity,
            'sold_quantity' => $this->sold_quantity,
            'total_revenue' => $this->total_revenue,
            'formatted_revenue' => number_format($this->total_revenue, 2) . ' درهم',
            'seller' => [
                'id' => $this->seller->id,
                'store_name' => $this->seller->store_name,
                'name' => $this->seller->name,
            ],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'stock_status' => $this->getStockStatus(),
        ];
    }
    
    /**
     * Get stock status text.
     */
    private function getStockStatus(): string
    {
        if (!$this->in_stock) {
            return 'نفد من المخزون';
        }
        
        if ($this->quantity <= 5) {
            return 'مخزون منخفض';
        }
        
        return 'متوفر';
    }
}
