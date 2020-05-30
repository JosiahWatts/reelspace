<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;

class SpaceController extends Controller
{
    public function index()
    {   
        return view('spaces.index', [ 'spaces' => auth()->user()->spaces ]);
    }

    public function show(Space $space)
    {
        return view('spaces.show', [ 'space' => $space ]);
    }
}
