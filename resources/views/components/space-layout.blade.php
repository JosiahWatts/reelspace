<x-app>
        <header>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold">{{ $space->name }}</h1>
                    <span class="ml-4 rounded-full bg-green-400 uppercase px-2 py-1 text-xs font-bold mr-3">Public</span>
                </div>                
                
                <livewire:search-dropdown />

            </div>
            <hr class="my-4">
            <div class="mt-4 flex items-center justify-between">
                <div>
                    <ul class="flex">
                        <li class="pr-4">
                            <a href="#">Activity Feed</a>
                        </li>
                        <li class="pr-4">
                            <a href="#">Watch List</a>
                        </li>
                        <li class="pr-4">
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center">
                    @foreach ($space->members as $member)
                        <span title="{{ $member->name }}" 
                              class="rounded-full px-3 py-1 text-md -mr-1 shadow {{ $loop->iteration % 2 == 0 ? 'bg-green-400' : 'bg-green-500'}}">
                              {{ $member->name[0] }}
                        </span>
                    @endforeach
                </div>
            </div>
        </header>
    
        <div class="mt-8">
            {{ $slot }}
        </div>
    
                    {{-- <aside>
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
            
                    </aside> --}}
    
</x-app>