<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Space;

class SpaceMovieController extends Controller
{
    public function index(Space $space)
    {
        $movies = $space->movies;

        $moviesFromTmdb = $movies->map(function ($movie) {
            return Http::withToken(config('services.tmdb.key'))
                ->get('https://api.themoviedb.org/3/movie/' . $movie->tmdb_id)
                ->json();
        });

        return view('space-movies.index', [
            'space' => $space,
            'movies' => $moviesFromTmdb
        ]);
    }

    public function show(Space $space, $tmdbId)
    {
        $movie = Http::withToken(config('services.tmdb.key'))
            ->get('https://api.themoviedb.org/3/movie/' . $tmdbId)
            ->json();

        return view('space-movies.show', [
            'space' => $space,
            'movie' => $movie
        ]);
    }
}
