<x-layout title="Edit a boba">
    <h1>Edit the details for {{$boba->name}}</h1>
    <form action="/bobas" method="POST">
    @csrf
    @method('PATCH')
    <!--A hidden field contains the id number of the film -->
    <input type="hidden" name="id" value="{{$boba->id}}">
    <div>
        <label for="name">Name:</label>
        <!-- The text boxes are populated with values from the database ready for the user to edit -->
        <input type="text" id="name" name="name" value="{{$boba->name}}">
    </div>
    <div>
        <label for="liquid">Base:</label>
        <input type="text" id="liquid" name="liquid" value="{{$boba->liquid}}">
    </div>
    <div>
        <label for="cupSize">Cup size:</label>
        <input type="text" id="cupSize" name="cupSize" value="{{$boba->cupSize}}">
    </div>
    <div>
        <label for="temperature">Temperature:</label>
        <input type="text" id="temperature" name="temperature" value="{{$boba->temperature}}">
    </div>
    <div>
        <label for="topping">Topping:</label>
        <input type="text" id="topping" name="topping" value="{{$boba->topping}}">
    </div>
    <div>
        <label for="sugarLevel">Sugar level:</label>
        <input type="text" id="sugarLevel" name="sugarLevel" value="{{$boba->sugarLevel}}">
    </div>
    <div>
        <label for="iceLevel">Ice amount:</label>
        <input type="text" id="iceLevel" name="iceLevel" value="{{$boba->iceLevel}}">
    </div>
    <div>
        <button class='btn-2' type="submit">Save Changes</button>
    </div>
    </form>
</x-layout>