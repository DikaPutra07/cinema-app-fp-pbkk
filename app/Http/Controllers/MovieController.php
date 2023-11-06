<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all()->collect();
        return view('movies.index',[
                'movies' => $movies,
            ]);
    }

    public function detail(Movie $movie)
    {
        return view('movies.detail', [
            'movie' => $movie
        ]);
    }
}
