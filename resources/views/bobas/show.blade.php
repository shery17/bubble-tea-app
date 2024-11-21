<x-layout title="Show the details for a boba">
    <h2>{{$boba->name}}</h2>
    <p>Base:{{$boba->liquid}}</p>
    <p>Cup size:{{$boba->cupSize}}</p>
    <p>Temperature:{{$boba->temperature}}</p>
    <p>Topping:{{$boba->topping}}</p>
    <p>Sugar level:{{$boba->sugarLevel}}</p>
    <p>Ice amount:{{$boba->iceLevel}}</p>

    <a href='/bobas/{{$boba->id}}/edit'>
        <button class='btn-2'>Edit</button>
    </a>

    <form method='POST' action='/bobas'>
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$boba->id}}">
        <button class='btn-2' type='submit'>Delete</button>
    </form>
</x-layout>