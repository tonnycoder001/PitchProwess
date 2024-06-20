<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;


    protected $fillable = [
        'tournament_name',
        'home_team',
        'away_team',
        'location',
        'date',
        'time',
        'results'
    ];
}
