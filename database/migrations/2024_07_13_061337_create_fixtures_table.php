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
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('home_team');
            $table->string('away_team');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->string('type');
            $table->integer('home_team_score')->nullable();
            $table->integer('away_team_score')->nullable();
            $table->string('results')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fixtures');
    }
};
