<x-app>
    <div>
        <ul>
            <li>
                <a href="/spaces/{{ $space['id']}}/shootouts">Shootouts</a>
            </li>
        </ul>
    </div>

    <div class="flex">
        <div class="flex-grow bg-white border rounded-lg overflow-hidden p-8 mr-4">
            {{ $slot }}
        </div>

        <aside>
            <div class="bg-white border rounded-lg overflow-hidden p-6"
                 style="max-width: 350px; min-width: 350px;">
                <p class="mb-3">
                    <span class="block uppercase tracking-wide font-bold text-xs text-gray-500">Space</span>
                    <span>{{ $space->name }}</span>
                </p>
                <p class="mb-3">
                    <span class="block uppercase tracking-wide font-bold text-xs text-gray-500">About</span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, cupiditate. Veritatis rerum exercitationem laborum molestiae iusto accusantium sequi possimus, doloremque non soluta fuga, dignissimos expedita natus? Fugit nisi iste dolorum.
                </p>
                <p class="mb-3">
                    <span class="block uppercase tracking-wide font-bold text-xs text-gray-500">Owner</span>
                    <span>{{ $space->owner->name }}</span>
                </p>
                
                @if (!$space->hasMember(auth()->user()))
                    <form action="/spaces/{{ $space->id }}/join" method="POST">
                        @csrf
                        <button class="border rounded-lg mt-3 py-1 px-4 bg-green-400 hover:bg-green-300 w-full">Join Space</button>
                    </form>  
                @else
                    <form action="/spaces/{{ $space->id }}/leave" method="POST">
                        @csrf
                        <button class="border rounded-lg mt-3 py-1 px-4 bg-green-400 hover:bg-green-300 w-full">Leave Space</button>
                    </form>
                @endif
            
            </div>

            <div class="bg-white border rounded-lg overflow-hidden p-6 mt-3"
                 style="max-width: 600px;">
                 <span class="block uppercase tracking-wide font-bold text-xs text-gray-500">Members ({{ $space->members->count() }})</span>
                 <ul>
                    @foreach ($space->members as $member)
                    <li class="py-1">
                       {{ $member->name }}
                    </li>
                   @endforeach
                 </ul>
            </div>
        </aside>
    </div>

    {{--<livewire:search-dropdown :space="$space" />--}}
</x-app>