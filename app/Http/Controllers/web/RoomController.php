<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('web.rooms.index');
    }

    public function show($id)
    {
        return view('web.rooms.room');
    }
}