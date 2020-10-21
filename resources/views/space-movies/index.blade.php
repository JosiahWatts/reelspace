<x-space-layout :space="$space">
    <div class="flex flex-wrap">
        @forelse ($movies as $movie)
            <div class="flex flex-col flex-shrink-0 px-4 py-4" style="min-height: 300px">
                <a href="/spaces/{{ $space->id }}/movies/{{ $movie['id'] }}" class="flex-grow">
                    <img src="{{ 'https://image.tmdb.org/t/p/w92/' . $movie['poster_path']}}" alt="{{ $movie['title'] . ' Poster' }}">
                </a>
                <span class="text-center" style="max-width: 200px;">{{ $movie['title'] }}</span>
            </div>
        @empty
            <p>I think you need to add some movies :)</p>
        @endforelse
    </div>
</x-space-layout>