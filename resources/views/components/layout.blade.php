<!DOCTYPE HTML>
<html class="h-full">
<head>
    <title>{{ $title }}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    @stack('styles')

    <!-- Dark mode boot (prevents flash) -->
    <script>
        (function () {
            const saved = localStorage.getItem('theme'); // 'dark' | 'light' | null
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

            if (saved === 'dark' || (!saved && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
</head>

<body class="min-h-screen bg-slate-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100">
<header class="bg-white border-b border-slate-200 dark:bg-slate-900 dark:border-slate-800">
    <div class="mx-auto flex items-center px-4 py-4 xl:max-w-7xl">
        <!-- Logo -->
        <a href="/bobas" class="mr-auto text-xl font-bold tracking-tight text-indigo-700 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300">
            Boba Tea Store
        </a>

        <div class="flex items-center gap-6">
            <!-- Desktop Navigation -->
            <nav class="hidden md:block">
                <ul class="flex items-center space-x-6">
                    <li>
                        <a href="/bobas" class="text-sm font-medium text-slate-700 hover:text-indigo-600 transition dark:text-slate-200 dark:hover:text-indigo-300">
                            Home
                        </a>
                    </li>

                    @can('admin-or-user')
                        <li>
                            <a href="/bobas/create" class="text-sm font-medium text-slate-700 hover:text-indigo-600 transition dark:text-slate-200 dark:hover:text-indigo-300">
                                Add new boba
                            </a>
                        </li>
                    @endcan

                    <li>
                        <a href="/bobas/about" class="text-sm font-medium text-slate-700 hover:text-indigo-600 transition dark:text-slate-200 dark:hover:text-indigo-300">
                            About
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Auth + Theme -->
            <div class="flex items-center gap-3">
                <!-- Theme toggle -->
                <button
                    id="theme-toggle"
                    type="button"
                    class="rounded-md border border-slate-200 p-2 text-slate-700 hover:bg-slate-100 transition cursor-pointer
                           dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-800"
                    aria-label="Toggle theme"
                    title="Toggle theme"
                >
                    🌙
                </button>

                @auth
                    <span class="hidden sm:inline text-sm font-semibold text-slate-700 dark:text-slate-200">
                        {{ Auth::user()->name }}
                    </span>

                    <form method="POST" action="/logout">
                        @csrf
                        <button
                            type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white
                                   hover:bg-indigo-700 active:bg-indigo-800
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                                   dark:focus:ring-offset-slate-900
                                   transition cursor-pointer"
                        >
                            Logout
                        </button>
                    </form>
                @endauth

                @guest
                    <a
                        href="/login"
                        class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white
                               hover:bg-indigo-700 active:bg-indigo-800
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                               dark:focus:ring-offset-slate-900
                               transition cursor-pointer"
                    >
                        Sign in
                    </a>
                @endguest

                <!-- Mobile hamburger -->
                <button
                    id="menu-btn"
                    class="md:hidden rounded-md border border-slate-200 p-2 text-slate-700 hover:bg-slate-100 transition cursor-pointer
                           dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-800"
                    aria-label="Open menu"
                    type="button"
                >
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
        <div class="px-4 py-3">
            <ul class="space-y-2">
                <li>
                    <a href="/bobas" class="block rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-indigo-600 transition
                                           dark:text-slate-200 dark:hover:bg-slate-800 dark:hover:text-indigo-300">
                        Home
                    </a>
                </li>

                @can('admin-or-user')
                    <li>
                        <a href="/bobas/create" class="block rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-indigo-600 transition
                                                     dark:text-slate-200 dark:hover:bg-slate-800 dark:hover:text-indigo-300">
                            Add new boba
                        </a>
                    </li>
                @endcan

                <li>
                    <a href="/bobas/about" class="block rounded-md px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-indigo-600 transition
                                                 dark:text-slate-200 dark:hover:bg-slate-800 dark:hover:text-indigo-300">
                        About
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<main class="mx-auto px-4 py-10 xl:max-w-7xl">
    {{ $slot }}
</main>

<script>
    document.getElementById('menu-btn')?.addEventListener('click', function () {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });

    document.getElementById('theme-toggle')?.addEventListener('click', () => {
        const root = document.documentElement;
        const isDark = root.classList.toggle('dark');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
</script>
</body>
</html>
