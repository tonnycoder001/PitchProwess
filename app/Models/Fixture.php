<?php

namespace App\Models;

use App\Models\Team;
use App\Enums\MatchType;
use App\Models\Standing;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fixture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'date',
        'time',
        'type',
        'results',
        'home_team_id',
        'away_team_id',
        'home_team_score',
        'away_team_score'
    ];
    protected $casts = [
        'type' => MatchType::class,
    ];


    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }


    public function calculateTeamPoints()
    {
        // Ensure scores are set before calculating points
        if (is_null($this->home_team_score) || is_null($this->away_team_score)) {
            return; // Do not calculate points if scores are missing
        }

        // Find or create standings for home and away teams
        $homeStanding = Standing::firstOrCreate(['team_id' => $this->home_team_id]);
        $awayStanding = Standing::firstOrCreate(['team_id' => $this->away_team_id]);


        // Increment games played for both teams
        $homeStanding->games_played += 1;
        $awayStanding->games_played += 1;



        // Calculate points based on fixture scores
        if ($this->home_team_score > $this->away_team_score) {
            // Home team wins
            $homeStanding->points += 3;
            $homeStanding->wins += 1;
            $awayStanding->losses += 1;
        } elseif ($this->home_team_score < $this->away_team_score) {
            // Away team wins
            $awayStanding->points += 3;
            $awayStanding->wins += 1;
            $homeStanding->losses += 1;
        } else {
            // Draw
            $homeStanding->points += 1;
            $awayStanding->points += 1;
            $homeStanding->draws += 1;
            $awayStanding->draws += 1;
        }

        // Save the updated standings
        $homeStanding->save();
        $awayStanding->save();
    }

    // Event listeners to trigger point calculation
    protected static function booted()
    {
        static::created(function ($fixture) {
            $fixture->calculateTeamPoints();
        });

        static::updated(function ($fixture) {
            $fixture->calculateTeamPoints();
        });
    }
}
