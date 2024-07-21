<?php

namespace Database\Seeders\edu;

use Database\Seeders\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseUserSeeder extends CsvSeeder
{
    public $file = "csv/course_user.csv";
    public $table = "course_user";
}
