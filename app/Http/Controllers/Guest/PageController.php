<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function index()
    {
        $movies = (Movie::all());
        return view('welcome', compact('movies'));
    }
}
