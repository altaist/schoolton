<?php

namespace Database\Seeders\edu;

use Database\Seeders\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends CsvSeeder
{
    public $file = "csv/lessons.csv";
    public $table = "lessons";
}
