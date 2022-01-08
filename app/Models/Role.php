<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //create unfillable fields
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // role has many users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}