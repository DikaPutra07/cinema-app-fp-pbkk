<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        foreach ($movies as $movie) {
            $movie->description = Str::limit($movie->description, 150, '...');
        }
        return view('movies.index',[
                'movies' => $movies,
        ]);
    }

    public function detail(Movie $movie)
    {
        return view('movies.detail', [
            'movie' => $movie,
            'recommendationsByGenre' => Movie::where('genre_id', $movie->genre_id)->where('id', '!=', $movie->id)->limit(4)->get()->collect(),
            'recommendationsByRate' => Movie::where('id', '!=', $movie->id)->limit(4)->get()->collect()->sortByDesc('rating'),
        ]);
    }
}
