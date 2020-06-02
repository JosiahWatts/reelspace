<x-master>
    <main class="container mx-auto px-8">
        <div class="lg:flex lg:justify-between">

            <div class="w-40">
                @include('_side-links')
            </div>
            
            <div class="flex-1 mx-4">
                {{ $slot }}
            </div>
        </div>
    </main>
</x-master>