<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;

class SpaceController extends Controller
{
    public function index()
    {
        return view('spaces.index', ['spaces' => auth()->user()->spaces]);
    }

    public function show(Space $space)
    {
        return view('spaces.show', ['space' => $space]);
    }

    public function create()
    {
        return view('spaces.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required:max:255'
        ]);

        $space = Space::create([
            'name' => $attributes['name'],
            'user_id' => auth()->user()->id
        ]);

        $space->join(auth()->user());

        return redirect('/spaces');
    }
}
