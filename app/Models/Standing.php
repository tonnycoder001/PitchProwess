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
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public static function updateStandings()
    {
        // Reset standings
        self::truncate();

        $teams = Team::all();

        foreach ($teams as $team) {
            $standing = new self();
            $standing->team_id = $team->id;

            $standing->games_played = Fixture::where('home_team_id', $team->id)
                ->orWhere('away_team_id', $team->id)
                ->count();

            $standing->wins = Fixture::where('home_team_id', $team->id)
                ->whereColumn('home_team_score', '>', 'away_team_score')
                ->count() +
                Fixture::where('away_team_id', $team->id)
                ->whereColumn('away_team_score', '>', 'home_team_score')
                ->count();

            $standing->draws = Fixture::where('home_team_id', $team->id)
                ->orWhere('away_team_id', $team->id)
                ->whereColumn('home_team_score', '=', 'away_team_score')
                ->count();

            $standing->losses = $standing->games_played - $standing->wins - $standing->draws;

            $standing->goal_difference = Fixture::where('home_team_id', $team->id)
                ->sum('home_team_score') -
                Fixture::where('home_team_id', $team->id)
                ->sum('away_team_score') +
                Fixture::where('away_team_id', $team->id)
                ->sum('away_team_score') -
                Fixture::where('away_team_id', $team->id)
                ->sum('home_team_score');

            $standing->points = ($standing->wins * 3) + $standing->draws;

            $standing->save();
        }
    }
}
