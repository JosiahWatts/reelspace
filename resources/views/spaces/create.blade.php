<x-app>
    <form action="/spaces" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
              Name Your Space
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Crazy Space">
        </div>

        <button class="border rounded-lg py-2 px-4 bg-green-400 hover:bg-green-300" type="submit">Create a Space</button>
    </form>
    @error('name')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</x-app>