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

    public function standing()
    {
        return $this->hasOne(Standing::class);
    }
}
