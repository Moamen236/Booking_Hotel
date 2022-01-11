<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index()
    {
        if (auth()->user()->role->name == 'client') {
            return redirect()->route('home');
        } elseif (auth()->user()->role->name == 'admin') {
            return redirect()->route('admin.dashboard');
        }
    }
}