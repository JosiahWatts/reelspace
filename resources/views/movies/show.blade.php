<x-app>
    <h1>{{ $movie['title'] }}</h1>
    <p class="mt-4">{{ $movie['overview'] }}</p>

    <form action="/space/3/movies/{{ $movie['id'] }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="border rounded-lg py-2 px-4 bg-green-400 hover:bg-green-300">Add to Space</button>
    </form>
</x-app>