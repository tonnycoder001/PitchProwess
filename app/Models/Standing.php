<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Fixture;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Standing extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'games_played',
        'wins',
        'draws',
        'losses',
        'points',
        'goal_difference',
        'position'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }


    protected static function booted()
    {
        static::saving(function ($standing) {
            $teamId = $standing->team_id;

            // Calculate goal difference for home games
            $homeGoals = Fixture::where('home_team_id', $teamId)->sum('home_team_score');
            $awayGoalsConceded = Fixture::where('home_team_id', $teamId)->sum('away_team_score');

            // Calculate goal difference for away games
            $awayGoals = Fixture::where('away_team_id', $teamId)->sum('away_team_score');
            $homeGoalsConceded = Fixture::where('away_team_id', $teamId)->sum('home_team_score');

            // Calculate total goal difference
            $standing->goal_difference = ($homeGoals + $awayGoals) - ($awayGoalsConceded + $homeGoalsConceded);
        });
    }
}
