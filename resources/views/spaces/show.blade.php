<x-app>
    <h1>{{ $space->name }}</h1>
    <ul class="mt-3">
        @forelse ($space->members as $member)
            <li>{{ $member->name }}</li>
        @empty
            <li>There are no members.</li>
        @endforelse
    </ul>
</x-app>