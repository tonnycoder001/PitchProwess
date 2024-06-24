<?php

use App\Enums\MatchType;
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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('home_team');
            $table->string('away_team');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->string('results')->nullable();
            $table->enum('type', [MatchType::LEAGUE, MatchType::TOURNAMENT, MatchType::FRIENDLY]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
