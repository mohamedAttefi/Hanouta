<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordSaleRequest extends FormRequest
{
    /**
     * Determine if the seller is authorized to make this request.
     */
    public function authorize(): bool
    {
        $seller = auth('seller')->user();
        $product = $this->route('product');
        
        return $seller && $product && $seller->id === $product->seller_id && $product->in_stock;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $product = $this->route('product');
        $maxQuantity = $product ? $product->quantity : 0;
        
        return [
            'quantity' => [
                'required',
                'integer',
                'min:1',
                "max:{$maxQuantity}"
            ],
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        $product = $this->route('product');
        $maxQuantity = $product ? $product->quantity : 0;
        
        return [
            'quantity.required' => 'الكمية مطلوبة',
            'quantity.integer' => 'الكمية يجب أن تكون رقما صحيحا',
            'quantity.min' => 'الكمية يجب أن تكون 1 على الأقل',
            'quantity.max' => "الكمية المتاحة: {$maxQuantity} قطعة فقط",
        ];
    }
}
