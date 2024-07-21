<?php

namespace Database\Seeders\edu;

use Database\Seeders\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends CsvSeeder
{
    public $file = "csv/courses.csv";
    public $table = "courses";
}
