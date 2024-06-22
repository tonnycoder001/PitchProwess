<?php

use App\Enums\PlayerCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('foot');
            $table->integer('jersey_number');
            $table->string('nationality');
            $table->string('position');
            $table->string('image');
            $table->enum('category', [PlayerCategory::MEN, PlayerCategory::WOMEN, PlayerCategory::ACADEMY]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
