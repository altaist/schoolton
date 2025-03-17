<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'title' => 'Разбор натальной карты',
                'price' => 799.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Расчет по картам Таро',
                'price' => 699.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Солярный расчет',
                'price' => 799.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Расчет любви',
                'price' => 499.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Что ждет Вас в будущем?',
                'price' => 499.00,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('products')->insert($products);
    }
}
