<x-layout title="Edit a boba">
    <section class="mx-auto mt-10 w-full max-w-xl rounded-xl border bg-white p-8 shadow">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-900">
                Edit the details for {{ $boba->name }}
            </h1>
            <p class="mt-1 text-sm text-gray-600">
                Update the boba options and save your changes.
            </p>
        </header>

        <form action="/bobas/{{ $boba->id }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')

            <fieldset class="space-y-5">
                <div class="space-y-1">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $boba->name) }}"
                        required
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm
                               focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                    >
                </div>

                <div class="space-y-1">
                    <label for="liquid" class="block text-sm font-medium text-gray-700">Base</label>
                    <select
                        id="liquid"
                        name="liquid"
                        required
                        class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                               focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                    >
                        <option value="Chocolate Milk Tea" @selected(old('liquid', $boba->liquid) === 'Chocolate Milk Tea')>Chocolate Milk Tea</option>
                        <option value="Strawberry Milk Tea" @selected(old('liquid', $boba->liquid) === 'Strawberry Milk Tea')>Strawberry Milk Tea</option>
                        <option value="Banana Milk Tea" @selected(old('liquid', $boba->liquid) === 'Banana Milk Tea')>Banana Milk Tea</option>
                        <option value="Original Creamer" @selected(old('liquid', $boba->liquid) === 'Original Creamer')>Original Creamer Tea</option>
                        <option value="Organic Soya Milk" @selected(old('liquid', $boba->liquid) === 'Organic Soya Milk')>Organic Soya Milk Tea</option>
                        <option value="Organic Oat Milk" @selected(old('liquid', $boba->liquid) === 'Organic Oat Milk')>Organic Oat Milk Tea</option>
                        <option value="Organic Whole Milk" @selected(old('liquid', $boba->liquid) === 'Organic Whole Milk')>Organic Whole Milk Tea</option>
                    </select>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="space-y-1">
                        <label for="cupSize" class="block text-sm font-medium text-gray-700">Cup size</label>
                        <select
                            id="cupSize"
                            name="cupSize"
                            required
                            class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                                   focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                        >
                            <option value="Large" @selected(old('cupSize', $boba->cupSize) === 'Large')>Large</option>
                            <option value="Regular" @selected(old('cupSize', $boba->cupSize) === 'Regular')>Regular</option>
                            <option value="Small" @selected(old('cupSize', $boba->cupSize) === 'Small')>Small</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label for="temperature" class="block text-sm font-medium text-gray-700">Temperature</label>
                        <select
                            id="temperature"
                            name="temperature"
                            required
                            class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                                   focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                        >
                            <option value="Cold" @selected(old('temperature', $boba->temperature) === 'Cold')>Cold</option>
                            <option value="Hot" @selected(old('temperature', $boba->temperature) === 'Hot')>Hot</option>
                        </select>
                    </div>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div class="space-y-1">
                        <label for="topping" class="block text-sm font-medium text-gray-700">Topping</label>
                        <select
                            id="topping"
                            name="topping"
                            required
                            class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                                   focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                        >
                            <option value="Pearls" @selected(old('topping', $boba->topping) === 'Pearls')>Pearls</option>
                            <option value="Pudding" @selected(old('topping', $boba->topping) === 'Pudding')>Pudding</option>
                            <option value="Coconut Jelly" @selected(old('topping', $boba->topping) === 'Coconut Jelly')>Coconut Jelly</option>
                            <option value="Aloe Vera" @selected(old('topping', $boba->topping) === 'Aloe Vera')>Aloe Vera</option>
                        </select>
                    </div>

                    <div class="space-y-1">
                        <label for="sugarLevel" class="block text-sm font-medium text-gray-700">Sugar level</label>
                        <select
                            id="sugarLevel"
                            name="sugarLevel"
                            required
                            class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                                   focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                        >
                            <option value="Regular" @selected(old('sugarLevel', $boba->sugarLevel) === 'Regular')>Regular</option>
                            <option value="Less" @selected(old('sugarLevel', $boba->sugarLevel) === 'Less')>Less</option>
                            <option value="None" @selected(old('sugarLevel', $boba->sugarLevel) === 'None')>None</option>
                        </select>
                    </div>
                </div>

                <div class="space-y-1">
                    <label for="iceLevel" class="block text-sm font-medium text-gray-700">Ice amount</label>
                    <select
                        id="iceLevel"
                        name="iceLevel"
                        required
                        class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                               focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                    >
                        <option value="Regular" @selected(old('iceLevel', $boba->iceLevel) === 'Regular')>Regular</option>
                        <option value="Less" @selected(old('iceLevel', $boba->iceLevel) === 'Less')>Less</option>
                        <option value="None" @selected(old('iceLevel', $boba->iceLevel) === 'None')>None</option>
                    </select>
                </div>
            </fieldset>

            <div class="flex items-center gap-3 pt-2">
                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                           hover:bg-indigo-700 active:bg-indigo-800
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           transition"
                >
                    Save Changes
                </button>

                <a href="/bobas/{{ $boba->id }}" class="text-sm font-medium text-gray-700 underline underline-offset-4 hover:text-gray-900">
                    Cancel
                </a>
            </div>
        </form>
    </section>
</x-layout>

