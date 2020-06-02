<ul class="flex flex-col bg-green-300 px-2 py-4 rounded-lg mr-2">
    <li class="py-1">
        <a href="#">My Watchlist</a>
    </li>
    <li class="py-1">
        <a href="/spaces">My Spaces</a>
    </li>
    <li class="py-1">
        <a href="/explore">Explore</a>
    </li>
    <li class="py-1">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </li>
</ul>