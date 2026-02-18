<x-layout title="Boba Tea App">
    <section class="text-center">
        <h2 class="text-xl font-bold text-center mb-2">Here's a list of bobas</h2>
        <div class="flex flex-wrap gap-2">
            @foreach ($bobas as $boba)
            <p class="grow-1 border-2 rounded-lg bg-yellow-300 px-8 py-4 italic text-lg font-semibold cursor-pointer">
                <a href="/bobas/{{$boba->id}}">
                    {{$boba->name}}
                </a>
            </p>
            @endforeach
        </div>
    </section>
</x-layout>