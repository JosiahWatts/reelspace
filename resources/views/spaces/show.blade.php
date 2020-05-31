<x-app>
    <h1 class="text-2xl font-bold">{{ $space->name }}</h1>
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
        </aside>
    </div>
</x-app>