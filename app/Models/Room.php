<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    //create unfillable fields
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // room has on type
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    // room has many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}