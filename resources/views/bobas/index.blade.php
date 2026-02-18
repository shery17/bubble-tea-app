<x-layout title="Boba Tea App">
    <section class="mx-auto w-full max-w-5xl">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">Boba list</h1>
            <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">Pick a boba to view details and reviews.</p>
        </header>

        @if($bobas->isEmpty())
            <div class="rounded-xl border bg-white p-8 shadow dark:bg-slate-900 dark:border-slate-800">
                <p class="text-slate-700 dark:text-slate-200">No bobas yet.</p>
                @can('admin-or-user')
                    <a
                        href="/bobas/create"
                        class="mt-4 inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                               hover:bg-indigo-700 active:bg-indigo-800
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                               dark:focus:ring-offset-slate-900
                               transition"
                    >
                        Add the first boba
                    </a>
                @endcan
            </div>
        @else
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($bobas as $boba)
                    <a
                        href="/bobas/{{ $boba->id }}"
                        class="group rounded-xl border bg-white p-5 shadow-sm transition hover:shadow
                               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                               dark:bg-slate-900 dark:border-slate-800 dark:focus:ring-offset-slate-900"
                    >
                        <div class="flex items-start justify-between gap-4">
                            <h2 class="text-base font-semibold text-slate-900 group-hover:text-indigo-700 transition
                                       dark:text-slate-100 dark:group-hover:text-indigo-300">
                                {{ $boba->name }}
                            </h2>
                            <span class="text-slate-400 group-hover:text-indigo-600 transition dark:text-slate-500 dark:group-hover:text-indigo-300">→</span>
                        </div>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                            View details
                        </p>
                    </a>
                @endforeach
            </div>
        @endif
    </section>
</x-layout>

