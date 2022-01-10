<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Blog belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Blog has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}