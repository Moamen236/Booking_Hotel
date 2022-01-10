<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    // comments belongs to a blog
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    // comments has many comment_replays
    public function comment_replays()
    {
        return $this->hasMany(Comment_replay::class);
    }
}