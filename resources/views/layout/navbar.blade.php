<nav class="bg-gray-300 mb-10">
    <div class="container mx-auto px-32 py-10">
        <div class="flex justify-between">
            <a href="/" class="font-bold">Blog Demo</a>

            <div class="flex gap-4">
                <a href="/" class="px-4 py-2 rounded hover:text-white hover:bg-blue-400">Article</a>
                @guest
                    <a href="/login" class="px-4 py-2 rounded hover:text-white hover:bg-blue-400">Login</a>
                    <a href="/register" class="px-4 py-2 rounded hover:text-white hover:bg-blue-400">Register</a>
                @endguest
                @auth
                    <form method="post" action="/logout">
                        @csrf
                        <button href="/logout" class="px-4 py-2 rounded hover:text-white hover:bg-blue-400">Logout</button>
                    </form>
                    <a href="#" class="px-4 py-2 rounded hover:text-white hover:bg-blue-400">{{ auth()->user()->name }}</a>

                    @if(auth()->user()->is_admin)
                        <a href="/admin" class="px-4 py-2 rounded hover:text-white hover:bg-blue-400 underline">
                            Admin
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
