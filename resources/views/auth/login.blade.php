<x-layout title="Sign In">
    <section class="mx-auto mt-16 w-full max-w-md rounded-xl border bg-white p-8 shadow">
        <h1 class="mb-6 text-2xl font-semibold text-center">Sign In</h1>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div class="space-y-1">
                <label for="email" class="text-sm font-medium text-gray-700">
                    Email
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="you@example.com"
                    required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                           focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                >
            </div>

            <div class="space-y-1">
                <label for="password" class="text-sm font-medium text-gray-700">
                    Password
                </label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm
                           focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                >
            </div>

            <button
                type="submit"
                class="w-full rounded-md bg-indigo-600 py-2.5 text-sm font-semibold text-white
                       hover:bg-indigo-700 active:bg-indigo-800
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                       transition cursor-pointer"
            >
                Sign In
            </button>
        </form>
    </section>
</x-layout>



