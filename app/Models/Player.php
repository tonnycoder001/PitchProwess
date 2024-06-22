<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'first_name',
    //     'last_name',
    //     'age',
    //     'foot',
    //     'jersey_number',
    //     'nationality',
    //     'position',
    //     'image',
    //     'category'
    // ];
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'foot',
        'jersey_number',
        'nationality',
        'position',
        'image',
        'category'
    ];
}
