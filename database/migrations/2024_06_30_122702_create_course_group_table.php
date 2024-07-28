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
        Schema::create('course_group', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('course_id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->tinyInteger('state')->default(0);
            $table->dateTime('date_from')->nullable();
            $table->dateTime('date_to')->nullable();
            $table->date('date_sign_from')->nullable();
            $table->date('date_sign_to')->nullable();
            $table->json('schedule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_group');
    }
};
