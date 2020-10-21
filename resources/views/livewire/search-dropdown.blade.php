<div class="relative" style="width: 200px">
    <span>
        <button wire:click="toggleDisplaySearchModal"
               type="text" 
               class="text-left border border-gray-400 rounded-md py-1 pl-10 w-full hover:bg-gray-100">
               <span class="text-gray-400">Find A Movie</span>
        </button>
    </span>
    <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
        <svg class="fill-current pointer-events-none text-gray-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
    </div>

    @if ($displaySearchModal == true)
        <div class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
            <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-700 opacity-25"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full border border-gray-300" 
                role="dialog" 
                aria-modal="true" 
                aria-labelledby="modal-headline">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        Find A Movie
                        </h3>
                        <button wire:click="toggleDisplaySearchModal" class="text-2xl font-bold leading-none -mt-3">×</button>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="relative flex-grow">
                            <span>
                                <input type="text"
                                        wire:model="searchQuery"
                                        wire:keydown.enter="onSearchInputSearch()" 
                                        id="search-input"
                                        class="border border-gray-400 rounded-md py-1 pl-10 w-full"
                                        placeholder="Find A Movie (Press '/' to focus)"
                                        autofocus>
                            </span>
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                <svg class="fill-current pointer-events-none text-gray-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
                            </div>
                        </div>
                        <button class="ml-4 border border-green-600 px-2 py-1"
                                wire:click="onSearchInputSearch()">Search</button>
                    </div>
                    <hr class="my-4">
                    <div class="mt-2">
                        @forelse ($movies as $movie)
                            <div class="flex justify-between items-center">
                                <p>{{ $movie['title'] }}</p>
                                <button wire:click="storeMovie({{$movie['id']}})" class="border border-gray-500">Add</button>
                            </div>
                        @empty
                            <p>No Results Found</p>
                        @endforelse
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    @endif
</div>


