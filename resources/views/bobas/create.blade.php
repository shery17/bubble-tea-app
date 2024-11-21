<x-layout title="Add new boba">
  <h2>Add your own custom boba tea to the list!</h2>

  <form method="POST" action="/bobas">
    @csrf
    <div>
      <div>
        <label for="name">Name:</label>
        <input class='form-textbox' type="text" id="name" name="name" />
      </div>
      <div>
        <label for="liquid">Base:</label>
        <select id="liquid" name="liquid">
          <option value="Chocolate Milk Tea">Chocolate Milk Tea</option>
          <option value="Strawberry Milk Tea">Strawberry Milk Tea</option>
          <option value="Banana Milk Tea">Banana Milk Tea</option>
          <option value="Original Creamer">Original Creamer Tea</option>
          <option value="Organic Soya Milk">Organic Soya Milk Tea</option>
          <option value="Organic Oat Milk">Organic Oat Milk Tea</option>
          <option value="Organic Whole Milk">Organic Whole Milk Tea</option>
        </select>
      </div>
      <div>
        <label for="cupSize">Cup size:</label>
        <select id="cupSize" name="cupSize">
          <option value="Large">Large</option>
          <option value="Regular">Regular</option>
          <option value="Small">Small</option>
        </select>
      </div>
      <div>
        <label for="temperature">Temperature:</label>
        <select id="temperature" name="temperature">
          <option value="Cold">Cold</option>
          <option value="Hot">Hot</option>
        </select>
      </div>
      <div>
        <label for="topping">Topping:</label>
        <select id="topping" name="topping">
          <option value="Pearls">Pearls</option>
          <option value="Pudding">Pudding</option>
          <option value="Coconut Jelly">Coconut Jelly</option>
          <option value="Aloe Vera">Aloe Vera</option>
        </select>
      </div>
      <div>
        <label for="sugarLevel">Sugar level:</label>
        <select id="sugarLevel" name="sugarLevel">
          <option value="Regular">Regular</option>
          <option value="Less">Less</option>
          <option value="None">None</option>
        </select>
      </div>
      <div>
        <label for="iceLevel">Ice amount:</label>
        <select id="iceLevel" name="iceLevel">
          <option value="Regular">Regular</option>
          <option value="Less">Less</option>
          <option value="None">None</option>
        </select>
      </div>
    </div>
    <div>
      <button class='btn-2' type="submit">Save the Boba</button>
    </div>
  </form>
</x-layout>