<x-app>
    <h1 class="text-2xl font-bold mb-4">Explore Spaces</h1>
    
    <ul class="rounded-lg border border-gray-300 px-4">
        @forelse ($spaces as $space)
            <li class="py-4 {{ $loop->last ? '' : 'border-b'}}">
                <h2 class="font-medium"><a href="spaces/{{$space->id}}">{{ $space->name }}</a></h2> 
            </li> 
        @empty
            <li class="py-4">There seems to be no spaces in which to join.</li>
        @endforelse
    </ul>

    {{ $spaces->links() }}
</x-app>