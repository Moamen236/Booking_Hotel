<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    //create unfillable fields
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // payment has many users
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // payment has one booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}