<?php

namespace Database\Seeders\edu;

use Database\Seeders\CsvSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends CsvSeeder
{
    public $file = "csv/journal.csv";
    public $table = "journal";
}
