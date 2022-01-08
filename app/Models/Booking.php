<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    //create unfillable fields
    protected $guarded = ['id', 'created_at', 'updated_at'];


    // booking has one user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // booking has one room type
    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    // booking has one room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    // booking has one payment
    public function payment()
    {
        return $this->belongsTo(payment::class);
    }
}