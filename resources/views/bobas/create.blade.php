<x-layout title="Add new boba">
  <section class="mx-auto mt-10 w-full max-w-xl rounded-xl p-8 dark:shadow
                  dark:bg-slate-900 dark:border-slate-800">
    <h1 class="text-2xl font-semibold text-slate-900 dark:text-slate-100">Add your own custom boba tea</h1>
    <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">Add your own custom boba tea to the list!</p>

    <form method="POST" action="/bobas" class="mt-6 space-y-5">
      @csrf

      <div class="space-y-1">
        <label for="name" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Name</label>
        <input
          type="text"
          id="name"
          name="name"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
          placeholder="e.g. Brown Sugar Milk Tea"
        >
        @error('name')
          <p class="text-sm font-medium text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-1">
        <label for="liquid" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Base</label>
        <select
          id="liquid"
          name="liquid"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
        >
          <option value="Milk tea">Milk tea</option>
          <option value="Green tea">Green tea</option>
          <option value="Black tea">Black tea</option>
          <option value="Oolong tea">Oolong tea</option>
          <option value="Taro">Taro</option>
        </select>
        @error('liquid')
          <p class="text-sm font-medium text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-1">
        <label for="cupSize" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Cup size</label>
        <select
          id="cupSize"
          name="cupSize"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
        >
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
        </select>
        @error('cupSize')
          <p class="text-sm font-medium text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-1">
        <label for="temperature" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Temperature</label>
        <select
          id="temperature"
          name="temperature"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
        >
          <option value="Cold">Cold</option>
          <option value="Hot">Hot</option>
        </select>
        @error('temperature')
          <p class="text-sm font-medium text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-1">
        <label for="topping" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Topping</label>
        <select
          id="topping"
          name="topping"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
        >
          <option value="Tapioca pearls">Tapioca pearls</option>
          <option value="Pudding">Pudding</option>
          <option value="Jelly">Jelly</option>
          <option value="Aloe">Aloe</option>
        </select>
        @error('topping')
          <p class="text-sm font-medium text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-1">
        <label for="sugarLevel" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Sugar level</label>
        <select
          id="sugarLevel"
          name="sugarLevel"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
        >
          <option value="0%">0%</option>
          <option value="25%">25%</option>
          <option value="50%">50%</option>
          <option value="75%">75%</option>
          <option value="100%">100%</option>
        </select>
        @error('sugarLevel')
          <p class="text-sm font-medium text-red-600">{{ $message }}</p>
        @enderror
      </div>

      <div class="space-y-1">
        <label for="iceLevel" class="block text-sm font-medium text-slate-700 dark:text-slate-200">Ice amount</label>
        <select
          id="iceLevel"
          name="iceLevel"
          class="w-full rounded-md border border-slate-300 bg-white px-3 py-2 text-sm text-slate-900 shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20
                 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100"
        >
          <option value="No ice">No ice</option>
          <option value="Less ice">Less ice</option>
          <option value="Normal ice">Normal ice</option>
          <option value="Extra ice">Extra ice</option>
        </select>
        @error('iceLevel')
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
        Create boba
      </button>
    </form>
  </section>
</x-layout>
