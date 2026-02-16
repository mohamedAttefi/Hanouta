<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the seller is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('seller')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_ar' => 'required|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string|max:1000',
            'description_en' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0.01|max:999999.99',
            'category' => [
                'required',
                'string',
                Rule::in(['خضروات', 'فواكه', 'ألبان', 'لحوم', 'مخبوزات', 'مشروبات', 'أخرى'])
            ],
            'image_url' => 'nullable|url|max:500',
            'quantity' => 'required|integer|min:0|max:999999',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'name_ar.required' => 'اسم المنتج بالعربية مطلوب',
            'name_ar.max' => 'اسم المنتج بالعربية يجب ألا يتجاوز 255 حرف',
            'price.required' => 'السعر مطلوب',
            'price.numeric' => 'السعر يجب أن يكون رقما',
            'price.min' => 'السعر يجب أن يكون أكبر من 0.01 درهم',
            'category.required' => 'الفئة مطلوبة',
            'category.in' => 'الفئة المحددة غير صالحة',
            'quantity.required' => 'الكمية مطلوبة',
            'quantity.integer' => 'الكمية يجب أن تكون رقما صحيحا',
            'quantity.min' => 'الكمية يجب أن تكون 0 أو أكبر',
            'image_url.url' => 'رابط الصورة يجب أن يكون رابطا صحيحا',
        ];
    }
}
