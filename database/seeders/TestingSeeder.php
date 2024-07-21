<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CustomProperties;
use Database\Seeders\edu\JournalSeeder;
use Database\Seeders\edu\LessonSeeder;
use Illuminate\Database\Seeder;

class TestingSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DatabaseSeeder::class);

         $this->call(LessonSeeder::class);
         $this->call(JournalSeeder::class);
    }
}
