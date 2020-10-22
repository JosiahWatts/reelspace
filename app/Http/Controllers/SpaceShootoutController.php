<?php

namespace App\Http\Controllers;

use App\Shootout;
use App\Space;
use Illuminate\Http\Request;

class SpaceShootoutController extends Controller
{
    public function index(Space $space)
    {
        $shootouts = $space->shootouts;

        return view('space-shootouts.index', [
            'space' => $space,
            'shootouts' => $shootouts
        ]);
    }

    public function show(Shootout $shootout)
    {
        return view('space-shootouts.show', [
            'shootout' => $shootout
        ]);
    }
}
