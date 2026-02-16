<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name_ar' => 'طماطم',
                'name_en' => 'Tomatoes',
                'description_ar' => 'طماطم طازجة من المزارع المحلية',
                'description_en' => 'Fresh tomatoes from local farms',
                'price' => 8.50,
                'category' => 'خضروات',
                'image_url' => 'https://images.unsplash.com/photo-1546470427-e92b2c9c09d6?w=400',
                'in_stock' => true,
                'quantity' => 50
            ],
            [
                'name_ar' => 'خيار',
                'name_en' => 'Cucumber',
                'description_ar' => 'خيار أخضر طازج ونظيف',
                'description_en' => 'Fresh green cucumber',
                'price' => 6.00,
                'category' => 'خضروات',
                'image_url' => 'https://images.unsplash.com/photo-1581375380489-cdbd27ef5d68?w=400',
                'in_stock' => true,
                'quantity' => 30
            ],
            [
                'name_ar' => 'بطاطس',
                'name_en' => 'Potatoes',
                'description_ar' => 'بطاطس بنية طازجة من أفضل المزارع',
                'description_en' => 'Fresh brown potatoes from best farms',
                'price' => 4.50,
                'category' => 'خضروات',
                'image_url' => 'https://images.unsplash.com/photo-1518977626601-93e525f17a31?w=400',
                'in_stock' => true,
                'quantity' => 100
            ],
            [
                'name_ar' => 'بصل',
                'name_en' => 'Onions',
                'description_ar' => 'بصل أحمر حار طازج',
                'description_en' => 'Fresh red hot onions',
                'price' => 3.00,
                'category' => 'خضروات',
                'image_url' => 'https://images.unsplash.com/photo-1523040373857-eb0f1d41b3bf?w=400',
                'in_stock' => true,
                'quantity' => 80
            ],
            [
                'name_ar' => 'تفاح',
                'name_en' => 'Apples',
                'description_ar' => 'تفاح أحمر حلو ومقرمش',
                'description_en' => 'Sweet and crunchy red apples',
                'price' => 12.00,
                'category' => 'فواكه',
                'image_url' => 'https://images.unsplash.com/photo-1560806887-1e4cd0b6cbd6?w=400',
                'in_stock' => true,
                'quantity' => 60
            ],
            [
                'name_ar' => 'برتقال',
                'name_en' => 'Oranges',
                'description_ar' => 'برتقال جنوبي حلو وعصيري',
                'description_en' => 'Sweet and juicy southern oranges',
                'price' => 10.00,
                'category' => 'فواكه',
                'image_url' => 'https://images.unsplash.com/photo-1547514701-42782101795e?w=400',
                'in_stock' => true,
                'quantity' => 70
            ],
            [
                'name_ar' => 'موز',
                'name_en' => 'Bananas',
                'description_ar' => 'موز أصفر ناضج وحلو',
                'description_en' => 'Ripe sweet yellow bananas',
                'price' => 7.50,
                'category' => 'فواكه',
                'image_url' => 'https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=400',
                'in_stock' => true,
                'quantity' => 40
            ],
            [
                'name_ar' => 'عنب',
                'name_en' => 'Grapes',
                'description_ar' => 'عنب أحمر حلو طازج',
                'description_en' => 'Fresh sweet red grapes',
                'price' => 15.00,
                'category' => 'فواكه',
                'image_url' => 'https://images.unsplash.com/photo-1537640538966-79f369143f8f?w=400',
                'in_stock' => true,
                'quantity' => 25
            ],
            [
                'name_ar' => 'حليب',
                'name_en' => 'Milk',
                'description_ar' => 'حليب طازج كامل الدسم',
                'description_en' => 'Fresh full cream milk',
                'price' => 5.00,
                'category' => 'ألبان',
                'image_url' => 'https://images.unsplash.com/photo-1550583724-b2692b85b150?w=400',
                'in_stock' => true,
                'quantity' => 45
            ],
            [
                'name_ar' => 'لبن',
                'name_en' => 'Yogurt',
                'description_ar' => 'لبن زبادي طبيعي صحي',
                'description_en' => 'Natural healthy yogurt',
                'price' => 4.00,
                'category' => 'ألبان',
                'image_url' => 'https://images.unsplash.com/photo-1488477181946-6428a0291777?w=400',
                'in_stock' => true,
                'quantity' => 35
            ],
            [
                'name_ar' => 'جبن',
                'name_en' => 'Cheese',
                'description_ar' => 'جبن أبيض طازج',
                'description_en' => 'Fresh white cheese',
                'price' => 18.00,
                'category' => 'ألبان',
                'image_url' => 'https://images.unsplash.com/photo-1483695028932-b8c80784b3b4?w=400',
                'in_stock' => true,
                'quantity' => 20
            ],
            [
                'name_ar' => 'زبدة',
                'name_en' => 'Butter',
                'description_ar' => 'زبدة طبيعية 100%',
                'description_en' => '100% natural butter',
                'price' => 8.00,
                'category' => 'ألبان',
                'image_url' => 'https://images.unsplash.com/photo-1586201375761-83865001e31c?w=400',
                'in_stock' => true,
                'quantity' => 30
            ],
            [
                'name_ar' => 'دجاج',
                'name_en' => 'Chicken',
                'description_ar' => 'دجاج طازج من مزارع محلية',
                'description_en' => 'Fresh chicken from local farms',
                'price' => 25.00,
                'category' => 'لحوم',
                'image_url' => 'https://images.unsplash.com/photo-1586790170063-2f8bb56b0a1b?w=400',
                'in_stock' => true,
                'quantity' => 15
            ],
            [
                'name_ar' => 'لحم بقر',
                'name_en' => 'Beef',
                'description_ar' => 'لحم بقر طازج عالي الجودة',
                'description_en' => 'High quality fresh beef',
                'price' => 45.00,
                'category' => 'لحوم',
                'image_url' => 'https://images.unsplash.com/photo-1529692236672-92f46c9b2e0b?w=400',
                'in_stock' => true,
                'quantity' => 10
            ],
            [
                'name_ar' => 'خبز',
                'name_en' => 'Bread',
                'description_ar' => 'خبز عربي طازج ساخن',
                'description_en' => 'Fresh hot Arabic bread',
                'price' => 2.00,
                'category' => 'مخبوزات',
                'image_url' => 'https://images.unsplash.com/photo-1509440919896-2c8bd1bfa899?w=400',
                'in_stock' => true,
                'quantity' => 50
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
