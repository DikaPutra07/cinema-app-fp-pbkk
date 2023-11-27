<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Payment;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\Console\Output\ConsoleOutput;


class MovieController extends Controller
{
    public function index(Request $request)
    {
        $moviesQuery = Movie::query()->with('genre');
        // $out->writeln($moviesQuery->toSql());
        if ($request->has('search')) {
            $search = $request->input('search');
            $moviesQuery->where('title', 'like', '%' . $search . '%');
        }
        if ($request->has('genre')) {
            if ($request->input('genre') == 'all') {
                $moviesQuery->where('genre_id', '!=', null);
            }
            else{
                $genre = Genre::where('name', $request->input('genre'))->first();
                $moviesQuery->where('genre_id', $genre->id);
            }
        }

        $movies = $moviesQuery->paginate(6);

        return view('movies.index', compact('movies'));
    }


    public function detail(Movie $movie)
    {
        return view('movies.detail', [
            'movie' => $movie,
            'shows' => Show::where('movie_id', $movie->id)->get(),
            'payment' => Payment::all(),
            'recommendationsByGenre' => Movie::where('genre_id', $movie->genre_id)->where('id', '!=', $movie->id)->limit(4)->get()->collect(),
            'recommendationsByRate' => Movie::where('id', '!=', $movie->id)->limit(4)->get()->collect()->sortByDesc('rating'),
        ]);
    }
}
