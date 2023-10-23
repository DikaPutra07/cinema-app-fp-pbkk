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
        Schema::create('movie_for_rents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('duration');
            $table->text('description');
            $table->integer('rating');
            $table->date('release_date');
            $table->string('maturity_rating');
            $table->string('language');
            $table->string('image');
            $table->integer('rental_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_for_rents');
    }
};
