<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Database\Seeders\catalog\ProductSeeder;
use Database\Seeders\edu\CourseSeeder;
use Database\Seeders\edu\CourseUserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CourseUserSeeder::class);
    }
}
