<?php

namespace App\Models;

use App\Models\Fixture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];
    public function homeMatches()
    {
        return $this->hasMany(Fixture::class, 'home_team_id');
    }

    public function awayMatches()
    {
        return $this->hasMany(Fixture::class, 'away_team_id');
    }
}
