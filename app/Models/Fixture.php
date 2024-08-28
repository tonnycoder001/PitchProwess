<?php

namespace App\Models;

use App\Models\Team;
use App\Enums\MatchType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fixture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'home_team',
        'away_team',
        'location',
        'date',
        'time',
        'type',
        'results',
        'home_team_id',
        'away_team_id',
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
}
