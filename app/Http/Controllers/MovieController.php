<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Http::withToken(config('services.tmdb.key'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        return view('movies.index', [
            'movies' => $movies
        ]);
    }

    public function show($tmdbId)
    {
        $movie = Http::withToken(config('services.tmdb.key'))
            ->get('https://api.themoviedb.org/3/movie/' . $tmdbId)
            ->json();

        return view('movies.show', [
            'movie' => $movie
        ]);
    }
}
