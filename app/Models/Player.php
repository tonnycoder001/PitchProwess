<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;


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

    protected $appends = [
        'full_name'
    ];
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
}
