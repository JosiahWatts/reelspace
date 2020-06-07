<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $displaySearchModal = false;
    public $searchQuery;
    public $movies = [];

    public function render()
    {
        return view('livewire.search-dropdown', [
            'movies' => $this->movies
        ]);
    }

    public function toggleDisplaySearchModal()
    {
        $this->displaySearchModal = !$this->displaySearchModal;
        $this->searchQuery = '';
        $this->movies = [];
    }

    public function onSearchInputSearch()
    {
        $this->movies = Http::withToken(config('services.tmdb.key'))
            ->get('https://api.themoviedb.org/3/search/movie?query=' . $this->searchQuery)
            ->json()['results'];
    }

    // public function onSearchInputSearch()
    // {
    //     $this->getMovies()
    // }

    // private function getMovies(searchQuery)
    // {
    //     //
    // }
}
