<x-layout title="Sign In">
    <section class="mx-auto mt-16 w-full max-w-md rounded-xl p-8 dark:shadow
                    dark:bg-slate-900 dark:border-slate-800">
        <h1 class="mb-6 text-2xl font-semibold text-center text-slate-900 dark:text-slate-100">
            Sign In
        </h1>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div class="space-y-1">
                <label for="email" class="text-sm font-medium text-slate-700 dark:text-slate-200">
                    Email
                </label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="you@example.com"
                    required
                    class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900
                           focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                           dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
                >
                @error('email')
                <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-1">
                <label for="password" class="text-sm font-medium text-slate-700 dark:text-slate-200">
                    Password
                </label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    placeholder="********"
                    required
                    class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900
                           focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                           dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
                >
                @error('password')
                <p class="text-sm font-medium text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                       hover:bg-indigo-700 active:bg-indigo-800
                       focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                       dark:focus:ring-offset-slate-900
                       transition cursor-pointer"
            >
                Sign In
            </button>
        </form>
    </section>
</x-layout>


