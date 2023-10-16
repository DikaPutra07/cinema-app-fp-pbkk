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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->time('start_time');
            $table->date('date');
            $table->foreignId('movie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('studio_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('price');
            $table->integer('remaining_seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
