<x-master>
    <main class="container mx-auto">
        <div class="flex justify-between">

            <div class="w-32">
                Links
            </div>
            
            <div class="flex-1 mx-4">
                {{ $slot }}
            </div>

            <div class="lg:w-1/6 p-4 h-full">
                Activity Feed?
            </div>

        </div>
    </main>
</x-master>