<x-layout title="Add a Review">
    <section class="mx-auto mt-10 w-full max-w-xl rounded-xl p-8
                    dark:bg-slate-900 dark:border-slate-800">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">
                Add a Review for {{ $boba->name }}
            </h1>
            <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">
                Share your thoughts and rate this boba.
            </p>
        </header>

        {{-- Validation errors --}}
        @if ($errors->any())
            <div role="alert" class="mb-6 rounded-md border border-red-200 bg-red-50 p-4
                                     dark:border-red-900/50 dark:bg-red-950/30">
                <p class="text-sm font-semibold text-red-800 dark:text-red-200">Please fix the following:</p>
                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-red-800 dark:text-red-200">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('reviews.store', $boba->id) }}" class="space-y-5">
            @csrf

            <fieldset class="space-y-5">
                <div class="space-y-1">
                    <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Your name
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                               focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                               dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
                        placeholder="e.g. Alex"
                    >
                </div>

                <div class="space-y-1">
                    <label for="content" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Your review
                    </label>
                    <textarea
                        id="content"
                        name="content"
                        required
                        rows="5"
                        class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                               focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                               dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
                        placeholder="What did you like or dislike?"
                    >{{ old('content') }}</textarea>
                </div>

                <div class="space-y-1">
                    <label for="rating" class="block text-sm font-medium text-slate-700 dark:text-slate-200">
                        Rating
                    </label>
                    <select
                        id="rating"
                        name="rating"
                        required
                        class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                               focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                               dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
                    >
                        <option value="">Select a rating</option>
                        <option value="1" @selected(old('rating') == 1)>1</option>
                        <option value="2" @selected(old('rating') == 2)>2</option>
                        <option value="3" @selected(old('rating') == 3)>3</option>
                        <option value="4" @selected(old('rating') == 4)>4</option>
                        <option value="5" @selected(old('rating') == 5)>5</option>
                    </select>
                </div>
            </fieldset>

            <div class="flex items-center gap-3 pt-2">
                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                           hover:bg-indigo-700 active:bg-indigo-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           dark:focus:ring-offset-slate-900
                           transition cursor-pointer"
                >
                    Save Review
                </button>

                <a
                    href="/bobas/{{ $boba->id }}"
                    class="text-sm font-medium text-slate-700 underline underline-offset-4 hover:text-slate-900
                           dark:text-slate-200 dark:hover:text-slate-100"
                >
                    Cancel
                </a>
            </div>
        </form>
    </section>
</x-layout>
