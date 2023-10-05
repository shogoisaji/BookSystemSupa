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
        Schema::create('books', function (Blueprint $table) {
            $table->unsignedBigInteger('isbn')->primary();
            $table->string('title');
            $table->string('author');
            $table->text('discription')->default('');
            $table->integer('recommendation')->default(0);
            $table->text('comment')->default('');
            $table->string('resourceLink')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
