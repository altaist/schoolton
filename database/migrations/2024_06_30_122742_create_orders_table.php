<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->morphs('orderable');
            $table->unsignedSmallInteger('price_id')->nullable();
            $table->decimal('price');
            $table->tinyInteger('quantity')->nullable();
            $table->tinyInteger('state')->default(0);
            $table->tinyInteger('order_group')->default(0);
            $table->json('json_data')->nullable();
            $table->dateTime('paid_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
