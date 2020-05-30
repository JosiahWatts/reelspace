<x-app>
    @forelse ($spaces as $space)
        <div>
            <h1>
                <a href="spaces/{{$space->id}}">{{ $space->name }}</a>
            </h1> 
        </div> 
    @empty
        <p>You need to join some spaces!</p>
    @endforelse
</x-app>