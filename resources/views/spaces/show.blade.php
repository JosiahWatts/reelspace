<x-app>
    <header>
        <h1 class="text-2xl font-bold">{{ $space->name }}</h1>
    </header>
    <div class="flex justify-between mt-4">
        <div>
            <p>Movie content here</p>
        </div>
        <aside>
            <h2 class="text-xl font-bold">Members ({{ $space->members->count() }})</h2>
            <ul class="mt-3">
                @forelse ($space->members as $member)
                    <li>{{ $member->name }}</li>
                @empty
                    <li>There are no members.</li>
                @endforelse
            </ul>

            @if (!$space->hasMember(auth()->user()))
                <form action="/spaces/{{ $space->id }}/join" method="POST">
                    @csrf
                    <button type="submit" class="mt-4 border rounded-lg py-2 px-4 bg-green-400 hover:bg-green-300">Join This Space</button>
                </form>  
            @else
                <form action="/spaces/{{ $space->id }}/leave" method="POST">
                    @csrf
                    <button type="submit" class="mt-4 border rounded-lg py-2 px-4 bg-green-400 hover:bg-green-300">Leave This Space</button>
                </form>
            @endif

        </aside>
    </div>
</x-app>