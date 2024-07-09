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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('author_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('img')->nullable();
            $table->string('json_content')->nullable();
            $table->decimal('price',8,2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
