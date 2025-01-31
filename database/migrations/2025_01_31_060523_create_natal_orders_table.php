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
        Schema::dropIfExists('natal_orders');
        
        Schema::create('natal_orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('order_id')->unique();
            $table->string('email');
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->time('birth_time');
            $table->string('birth_city');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['new', 'paid', 'completed', 'cancelled'])->default('new');
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('natal_orders');
    }
};
