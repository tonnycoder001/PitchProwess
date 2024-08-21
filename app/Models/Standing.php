<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'club_name',
        'played',
        'won',
        'drawn',
        'lost',
        'goal_difference',
        'points',
    ];
}
