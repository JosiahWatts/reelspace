<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Space;

class ExploreController extends Controller
{
    public function __invoke()
    {
        return view('explore', [
            'spaces' => Space::query()
                ->orderBy('name')
                ->paginate(25)
        ]);
    }
}
