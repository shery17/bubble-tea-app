<x-layout title="Boba details">
    <section class="mx-auto w-full max-w-4xl space-y-6">
        <!-- Details Card -->
        <div class="rounded-xl p-8 dark:bg-slate-900 dark:border-slate-800">
            <div class="flex flex-col gap-1 sm:flex-row sm:items-start sm:justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">{{ $boba->name }}</h1>
                    <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">Full details for this boba.</p>
                </div>

                <div class="mt-4 flex flex-wrap gap-2 sm:mt-0">
                    @can('admin-access')
                        <a
                            href="/bobas/{{ $boba->id }}/edit"
                            class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                                   hover:bg-indigo-700 active:bg-indigo-800
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                                   dark:focus:ring-offset-slate-900
                                   transition"
                        >
                            Edit
                        </a>

                        <form method="POST" action="/bobas/{{ $boba->id }}">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="inline-flex items-center justify-center rounded-md border border-red-200 bg-white px-4 py-2 text-sm font-semibold text-red-700
                                       hover:bg-red-50
                                       focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2
                                       dark:bg-slate-900 dark:border-red-900/50 dark:text-red-300 dark:hover:bg-red-950/30
                                       dark:focus:ring-offset-slate-900
                                       transition cursor-pointer"
                                onclick="return confirm('Are you sure you want to delete this boba?')"
                            >
                                Delete
                            </button>
                        </form>
                    @endcan

                    @can('admin-or-user')
                        <a
                            href="/bobas/{{ $boba->id }}/addReview"
                            class="inline-flex items-center justify-center rounded-md border border-indigo-200 bg-white px-4 py-2 text-sm font-semibold text-indigo-700
                                   hover:bg-indigo-50
                                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                                   dark:bg-slate-900 dark:border-indigo-900/60 dark:text-indigo-300 dark:hover:bg-indigo-950/30
                                   dark:focus:ring-offset-slate-900
                                   transition"
                        >
                            Add Review
                        </a>
                    @endcan
                </div>
            </div>

            <dl class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                @php
                    $items = [
                        ['Base', $boba->liquid],
                        ['Cup size', $boba->cupSize],
                        ['Temperature', $boba->temperature],
                        ['Topping', $boba->topping],
                        ['Sugar level', $boba->sugarLevel],
                        ['Ice amount', $boba->iceLevel],
                    ];
                @endphp

                @foreach($items as [$label, $value])
                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-4
                                dark:border-slate-800 dark:bg-slate-950/40 bg-white shadow-sm">
                        <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">{{ $label }}</dt>
                        <dd class="mt-1 text-sm font-medium text-slate-900 dark:text-slate-100">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>

        <!-- Reviews Card -->
        <div class="rounded-xl p-8 dark:shadow dark:bg-slate-900 dark:border-slate-800">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Reviews</h2>

            @if($boba->reviews->isEmpty())
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">No reviews yet. Be the first to review this boba!</p>
            @else
                <ul class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    @foreach ($boba->reviews as $review)
                        <li class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm
                                   dark:bg-slate-900 dark:border-slate-800">
                            <div class="flex items-start justify-between gap-3">
                                <p class="font-semibold text-slate-900 dark:text-slate-100">{{ $review->name ?? 'Anonymous' }}</p>
                                <span class="rounded-full bg-indigo-50 px-2 py-0.5 text-xs font-semibold text-indigo-700 border border-indigo-100
                                             dark:bg-indigo-950/40 dark:text-indigo-300 dark:border-indigo-900/50">
                                    {{ $review->rating ?? '—' }}/5
                                </span>
                            </div>

                            <p class="mt-2 text-sm text-slate-700 dark:text-slate-200">{{ $review->content ?? 'No content available' }}</p>

                            @can('admin-or-user')
                                <form method="POST" action="{{ route('reviews.destroy', $review->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="mt-4 text-sm font-semibold text-red-600 hover:text-red-700 cursor-pointer
                                               dark:text-red-300 dark:hover:text-red-200"
                                        type="submit"
                                        onclick="return confirm('Are you sure you want to delete this review?')"
                                    >
                                        Delete review
                                    </button>
                                </form>
                            @endcan
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </section>
</x-layout>
