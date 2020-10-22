<x-space-layout :space="$space">
    @foreach ($shootouts as $shootout)
        
        <div class="border">
            <h1>{{ $shootout->name }}</h1>
            <p>{{ $shootout->description }}</p>
            <p>{{ $shootout->owner }}</p>
        </div>
    @endforeach
</x-space-layout>