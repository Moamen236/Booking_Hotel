<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    //create unfillable fields
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // room type has many rooms
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    // room type has many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}