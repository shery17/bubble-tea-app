<x-layout title="Add new boba">
  <section class="mx-auto mt-10 w-full max-w-xl rounded-xl border bg-white p-8 shadow">
    <h1 class="text-2xl font-semibold">Add your own custom boba tea</h1>
    <p class="mt-1 text-sm text-gray-600">Add your own custom boba tea to the list!</p>

    <form method="POST" action="/bobas" class="mt-6 space-y-5">
      @csrf

      <div class="space-y-1">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input
          type="text"
          id="name"
          name="name"
          class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
          placeholder="e.g. Brown Sugar Milk Tea"
        >
      </div>

      <div class="space-y-1">
        <label for="liquid" class="block text-sm font-medium text-gray-700">Base</label>
        <select
          id="liquid"
          name="liquid"
          class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
        >
          <option value="Chocolate Milk Tea">Chocolate Milk Tea</option>
          <option value="Strawberry Milk Tea">Strawberry Milk Tea</option>
          <option value="Banana Milk Tea">Banana Milk Tea</option>
          <option value="Original Creamer">Original Creamer Tea</option>
          <option value="Organic Soya Milk">Organic Soya Milk Tea</option>
          <option value="Organic Oat Milk">Organic Oat Milk Tea</option>
          <option value="Organic Whole Milk">Organic Whole Milk Tea</option>
        </select>
      </div>

      <div class="space-y-1">
        <label for="cupSize" class="block text-sm font-medium text-gray-700">Cup size</label>
        <select
          id="cupSize"
          name="cupSize"
          class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
        >
          <option value="Large">Large</option>
          <option value="Regular">Regular</option>
          <option value="Small">Small</option>
        </select>
      </div>

      <div class="space-y-1">
        <label for="temperature" class="block text-sm font-medium text-gray-700">Temperature</label>
        <select
          id="temperature"
          name="temperature"
          class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
        >
          <option value="Cold">Cold</option>
          <option value="Hot">Hot</option>
        </select>
      </div>

      <div class="space-y-1">
        <label for="topping" class="block text-sm font-medium text-gray-700">Topping</label>
        <select
          id="topping"
          name="topping"
          class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
        >
          <option value="Pearls">Pearls</option>
          <option value="Pudding">Pudding</option>
          <option value="Coconut Jelly">Coconut Jelly</option>
          <option value="Aloe Vera">Aloe Vera</option>
        </select>
      </div>

      <div class="space-y-1">
        <label for="sugarLevel" class="block text-sm font-medium text-gray-700">Sugar level</label>
        <select
          id="sugarLevel"
          name="sugarLevel"
          class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
        >
          <option value="Regular">Regular</option>
          <option value="Less">Less</option>
          <option value="None">None</option>
        </select>
      </div>

      <div class="space-y-1">
        <label for="iceLevel" class="block text-sm font-medium text-gray-700">Ice amount</label>
        <select
          id="iceLevel"
          name="iceLevel"
          class="w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-sm shadow-sm
                 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
        >
          <option value="Regular">Regular</option>
          <option value="Less">Less</option>
          <option value="None">None</option>
        </select>
      </div>

      <button
        type="submit"
        class="w-full rounded-md bg-indigo-600 py-2.5 text-sm font-semibold text-white
               hover:bg-indigo-700 active:bg-indigo-800
               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
               transition"
      >
        Save the Boba
      </button>
    </form>
  </section>
</x-layout>

