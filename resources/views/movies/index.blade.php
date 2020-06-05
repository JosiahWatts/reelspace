<x-app>
    <div class="flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="flex flex-col flex-shrink-0 px-4 py-4" style="min-height: 300px">
                <a href="/movies/{{ $movie['id'] }}" class="flex-grow">
                    <img src="{{ 'https://image.tmdb.org/t/p/w200/' . $movie['poster_path']}}" alt="{{ $movie['title'] . ' Poster' }}">
                </a>
                <span class="text-center" style="max-width: 200px;">{{ $movie['title'] }}</span>
            </div>
        @endforeach
    </div>
</x-app>