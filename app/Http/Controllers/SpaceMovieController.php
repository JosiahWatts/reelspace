<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SpaceMovieController extends Controller
{
    public function store($tmdbId)
    {
        $movie = Http::withToken(config('services.tmdb.key'))
            ->get('https://api.themoviedb.org/3/movie/' . $tmdbId)
            ->json();

        dd($movie);
    }
}
