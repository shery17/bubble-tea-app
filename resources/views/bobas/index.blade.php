<x-layout title="Boba Tea App">
    <h2>Here's a list of bobas</h2>
    @foreach ($bobas as $boba)
    <p>
        <a href="/bobas/{{$boba->id}}">
            {{$boba->name}}
        </a>
    </p>
    @endforeach
</x-layout>