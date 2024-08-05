<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'author',
        'published_at',
        'image',

    ];
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
}
