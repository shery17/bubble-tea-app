<x-layout title="Edit a boba">
    <section class="mx-auto mt-10 w-full max-w-xl rounded-xl p-8
                    dark:bg-slate-900 dark:border-slate-800">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">
                Edit the details for {{ $boba->name }}
            </h1>
            <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">
                Update the boba options and save your changes.
            </p>
        </header>

        <form action="/bobas/{{ $boba->id }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <fieldset class="space-y-5">
                @php
                    $inputClass = "w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                                   focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                                   dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100";
                    $labelClass = "block text-sm font-medium text-slate-700 dark:text-slate-200";
                @endphp

                <div class="space-y-1">
                    <label for="name" class="{{ $labelClass }}">Name</label>
                    <input type="text" id="name" name="name" value="{{ $boba->name }}" class="{{ $inputClass }}">
                    @error('name') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1">
                    <label for="liquid" class="{{ $labelClass }}">Base</label>
                    <select id="liquid" name="liquid" class="{{ $inputClass }}">
                        <option value="Milk tea" @selected($boba->liquid === 'Milk tea')>Milk tea</option>
                        <option value="Green tea" @selected($boba->liquid === 'Green tea')>Green tea</option>
                        <option value="Black tea" @selected($boba->liquid === 'Black tea')>Black tea</option>
                        <option value="Oolong tea" @selected($boba->liquid === 'Oolong tea')>Oolong tea</option>
                        <option value="Taro" @selected($boba->liquid === 'Taro')>Taro</option>
                    </select>
                    @error('liquid') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1">
                    <label for="cupSize" class="{{ $labelClass }}">Cup size</label>
                    <select id="cupSize" name="cupSize" class="{{ $inputClass }}">
                        <option value="Small" @selected($boba->cupSize === 'Small')>Small</option>
                        <option value="Medium" @selected($boba->cupSize === 'Medium')>Medium</option>
                        <option value="Large" @selected($boba->cupSize === 'Large')>Large</option>
                    </select>
                    @error('cupSize') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1">
                    <label for="temperature" class="{{ $labelClass }}">Temperature</label>
                    <select id="temperature" name="temperature" class="{{ $inputClass }}">
                        <option value="Cold" @selected($boba->temperature === 'Cold')>Cold</option>
                        <option value="Hot" @selected($boba->temperature === 'Hot')>Hot</option>
                    </select>
                    @error('temperature') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1">
                    <label for="topping" class="{{ $labelClass }}">Topping</label>
                    <select id="topping" name="topping" class="{{ $inputClass }}">
                        <option value="Tapioca pearls" @selected($boba->topping === 'Tapioca pearls')>Tapioca pearls</option>
                        <option value="Pudding" @selected($boba->topping === 'Pudding')>Pudding</option>
                        <option value="Jelly" @selected($boba->topping === 'Jelly')>Jelly</option>
                        <option value="Aloe" @selected($boba->topping === 'Aloe')>Aloe</option>
                    </select>
                    @error('topping') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1">
                    <label for="sugarLevel" class="{{ $labelClass }}">Sugar level</label>
                    <select id="sugarLevel" name="sugarLevel" class="{{ $inputClass }}">
                        <option value="0%" @selected($boba->sugarLevel === '0%')>0%</option>
                        <option value="25%" @selected($boba->sugarLevel === '25%')>25%</option>
                        <option value="50%" @selected($boba->sugarLevel === '50%')>50%</option>
                        <option value="75%" @selected($boba->sugarLevel === '75%')>75%</option>
                        <option value="100%" @selected($boba->sugarLevel === '100%')>100%</option>
                    </select>
                    @error('sugarLevel') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="space-y-1">
                    <label for="iceLevel" class="{{ $labelClass }}">Ice amount</label>
                    <select id="iceLevel" name="iceLevel" class="{{ $inputClass }}">
                        <option value="No ice" @selected($boba->iceLevel === 'No ice')>No ice</option>
                        <option value="Less ice" @selected($boba->iceLevel === 'Less ice')>Less ice</option>
                        <option value="Normal ice" @selected($boba->iceLevel === 'Normal ice')>Normal ice</option>
                        <option value="Extra ice" @selected($boba->iceLevel === 'Extra ice')>Extra ice</option>
                    </select>
                    @error('iceLevel') <p class="text-sm font-medium text-red-600">{{ $message }}</p> @enderror
                </div>
            </fieldset>

            <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
                <a
                    href="/bobas/{{ $boba->id }}"
                    class="inline-flex items-center justify-center rounded-md border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700
                           hover:bg-slate-50
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           dark:bg-slate-900 dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-800
                           dark:focus:ring-offset-slate-900
                           transition"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                           hover:bg-indigo-700 active:bg-indigo-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           dark:focus:ring-offset-slate-900
                           transition cursor-pointer"
                >
                    Save changes
                </button>
            </div>
        </form>
    </section>
</x-layout>
