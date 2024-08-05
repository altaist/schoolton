<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Seeders\CsvSeeder;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public $file = "csv/products.csv";
    public $table = "products";

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Product::factory()->create();

    }

}
