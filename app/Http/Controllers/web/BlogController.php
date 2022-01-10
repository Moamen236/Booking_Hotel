<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('web.blogs.index');
    }

    public function show($id)
    {
        return view('web.blogs.blog');
    }
}