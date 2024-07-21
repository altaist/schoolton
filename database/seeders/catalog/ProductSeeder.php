<?php

namespace Database\Seeders\catalog;

use App\Models\Edu\Product;
use Database\Seeders\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends CsvSeeder
{
    public $file = "csv/products.csv";
    public $table = "products";
}
