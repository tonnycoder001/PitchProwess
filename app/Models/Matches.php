<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'home_team',
        'away_team',
        'location',
        'date',
        'time',
        'results',
        'type',
    ];
}
