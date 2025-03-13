<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::table('products')->where('id', 1)->update(['price' => 1199]);
        DB::table('products')->where('id', 2)->update(['price' => 899]);
        DB::table('products')->where('id', 3)->update(['price' => 899]);
        DB::table('products')->where('id', 4)->update(['price' => 599]);
        DB::table('products')->where('id', 5)->update(['price' => 599]);
        // и так далее
    }

    public function down()
    {
        DB::table('products')->where('id', 1)->update(['price' => 600]);
        DB::table('products')->where('id', 2)->update(['price' => 899]);
        DB::table('products')->where('id', 3)->update(['price' => 799]);
        DB::table('products')->where('id', 4)->update(['price' => 499]);
        DB::table('products')->where('id', 5)->update(['price' => 499]);
        // исходные значения для отката
    }
};