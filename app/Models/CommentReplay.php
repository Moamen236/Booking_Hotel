<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReplay extends Model
{
    use HasFactory;

    // CommentReplay belongs to a comment
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}