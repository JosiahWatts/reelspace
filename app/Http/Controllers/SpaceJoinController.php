<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;

class SpaceJoinController extends Controller
{
    public function store(Space $space)
    {
        $space->join(auth()->user());

        return back();
    }

    public function destroy(Space $space)
    {
        $space->leave(auth()->user());

        return back();
    }
}
