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
        Schema::create('order_bev_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_bev_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('beverage_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_bev_details');
    }
};
