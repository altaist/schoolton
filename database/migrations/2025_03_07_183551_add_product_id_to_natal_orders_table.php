<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('natal_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->default(1)->after('id');
        });
    }

    public function down()
    {
        Schema::table('natal_orders', function (Blueprint $table) {
            $table->dropColumn('product_id');
        });
    }
}; 