<!DOCTYPE HTML>
<html>
<head>
    <!-- Original CSS -->
    <!-- <link href="{{asset('css/OriginalCSS.css')}}" type="text/css" rel="stylesheet"> -->
    <!-- Tailwind CSS -->
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body class="bg-gray-400 ">
    <header class="bg-violet-300">
        <div class="flex items-center px-4 py-3 xl:max-w-7xl mx-auto">

            <!-- Logo (left) -->
            <h1 class="text-xl font-bold mr-auto">
                Boba Tea Store
            </h1>

            <!-- Right side: nav + user -->
            <div class="flex items-center gap-6">

                <!-- Navigation -->
                <nav class="hidden md:block">
                    <ul class="flex items-center space-x-6">

                        <li><a href="/bobas" class="block py-2">Home</a></li>

                        @can('admin-or-user')
                        <li><a href="/bobas/create" class="block py-2">Add new boba</a></li>
                        @endcan

                        <li><a href="/bobas/about" class="block py-2">About</a></li>

                    </ul>
                </nav>

                <!-- Auth area -->
                <div class="flex items-center gap-3">

                    @auth
                        <span class="font-semibold">
                            {{ Auth::user()->name }}
                        </span>

                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white 
                            hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 
                            transition cursor-pointer">
                                Logout
                            </button>
                        </form>
                    @endauth

                    @guest
                        <a href="/login" class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white 
                            hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 
                            transition cursor-pointer">
                            Sign in
                        </a>
                    @endguest

                    <!-- Mobile hamburger -->
                    <button id="menu-btn" class="md:hidden p-2 cursor-pointer">
                        ☰
                    </button>

                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pb-4">
            <ul class="space-y-2">
                <li><a href="/bobas">Home</a></li>

                @can('admin-or-user')
                <li><a href="/bobas/create">Add new boba</a></li>
                @endcan

                <li><a href="/bobas/about">About</a></li>
            </ul>
        </div>
    </header>

    <main class="px-8 xl:max-w-7xl mx-auto mt-4">
        <section>
            <div>
                {{$slot}}
            </div>
        </section>
    </main>

    <script>
        document.getElementById('menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>