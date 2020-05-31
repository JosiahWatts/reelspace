<x-app>
    <header class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">My Spaces</h1>
        <button class="border rounded-lg py-2 px-4 bg-green-400 hover:bg-green-300">Create Space</button>
    </header>
    <ul class="rounded-lg border border-gray-300 px-4">
        @forelse ($spaces as $space)
            <li class="py-4 {{ $loop->last ? '' : 'border-b'}}">
                <h2 class="font-medium">
                    <a href="spaces/{{$space->id}}">{{ $space->name }}</a>
                </h2>
            </li> 
        @empty
            <li>You need to join some spaces!</li>
        @endforelse
    </ul> 
    
</x-app>