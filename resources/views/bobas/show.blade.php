<x-layout title="Show the details for a boba">
    <div class="flex flex-col gap-y-4">
        <h2 class="text-lg font-bold">{{$boba->name}}</h2>
        <p><span class="font-semibold">Base: </span>{{$boba->liquid}}</p>
        <p><span class="font-semibold">Cup size: </span>{{$boba->cupSize}}</p>
        <p><span class="font-semibold">Temperature: </span>{{$boba->temperature}}</p>
        <p><span class="font-semibold">Topping: </span>{{$boba->topping}}</p>
        <p><span class="font-semibold">Sugar level: </span>{{$boba->sugarLevel}}</p>
        <p><span class="font-semibold">Ice amount: </span>{{$boba->iceLevel}}</p>
    </div>
    <div class="flex items-start flex-wrap gap-2 my-8 text-center">
        @can('admin-access')
        <a class="bg-blue-400 py-2 px-6 border-4 border-blue-700 rounded-lg font-semibold cursor-pointer hover:bg-blue-300" href='/bobas/{{$boba->id}}/edit'>
            Edit
        </a>

        <form action='/bobas/{{ $boba->id }}'>
            @csrf
            @method('DELETE')
            <button class="bg-blue-400 py-2 px-6 border-4 border-blue-700 rounded-lg font-semibold cursor-pointer hover:bg-blue-300" type='submit'>Delete</button>
        </form>
        @endcan

        @can('admin-or-user')
        <a class="bg-blue-400 py-2 px-6 border-4 border-blue-700 rounded-lg font-semibold cursor-pointer hover:bg-blue-300" href='/bobas/{{$boba->id}}/addReview'>
            Add Review
        </a>
        @endcan
    </div>
    <h2 class="text-lg font-bold mb-4">Reviews:</h2>
    @if($boba->reviews->isEmpty())
        <p class="text-gray-600">No reviews yet. Be the first to review this boba!</p>
    @else
        <ul class="flex flex-wrap items-start gap-y-4 gap-x-2">
            @foreach ($boba->reviews as $review)
                <li class="border-2 py-4 px-8 rounded-md shadow-lg bg-blue-100 grow-1 max-w-md">
                    <p class="font-semibold">{{ $review->name ?? 'Anonymous' }}</p>
                    <p class="text-gray-700">{{ $review->content ?? 'No content available' }}</p>
                    <p class="">Rating: {{ $review->rating ?? 'Not rated' }}/5</p>

                    <!-- Delete Button -->
                    @can('admin-or-user')
                    <form method="POST" action="{{ route('reviews.destroy', $review->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="mt-4 cursor-pointer hover:text-red-600" type="submit" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                    </form>
                    @endcan
                </li>
            @endforeach
        </ul>
    @endif

</x-layout>