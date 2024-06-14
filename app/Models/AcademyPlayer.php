<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyPlayer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'foot',
        'jersey_number',
        'nationality',
        'position',
        'image',
    ];
}
