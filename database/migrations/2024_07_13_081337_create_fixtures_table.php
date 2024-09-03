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
            $table->unsignedBigInteger('home_team_id')->constrained('teams')->onDelete('cascade');
            $table->unsignedBigInteger('away_team_id')->constrained('teams')->onDelete('cascade');
            $table->string('name');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->enum('team', ['men', 'women', 'academy']);
            $table->enum('type', ['league', 'tournament', 'friendly']);
            $table->integer('home_team_score')->nullable();
            $table->integer('away_team_score')->nullable();
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
