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
        Schema::create('games_prices', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('game_id');
            $table->string('game_image');
            $table->string('name');
            $table->string('price');
            $table->string('qty');
            $table->string('total_price');
            $table->string('commission');
            $table->string('trx_id');
            $table->string('trx_image');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games_prices');
    }
};
