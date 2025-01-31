<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('natal_orders', function (Blueprint $table) {
            $table->string('payment_method')->nullable();
            $table->decimal('payment_fee', 10, 2)->nullable();
            $table->string('payer_email')->nullable();
        });
    }

    public function down()
    {
        Schema::table('natal_orders', function (Blueprint $table) {
            $table->dropColumn(['payment_method', 'payment_fee', 'payer_email']);
        });
    }
}; 