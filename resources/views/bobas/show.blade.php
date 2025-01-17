<x-layout title="Show the details for a boba">
    <h2>{{$boba->name}}</h2>
    <p>Base:{{$boba->liquid}}</p>
    <p>Cup size:{{$boba->cupSize}}</p>
    <p>Temperature:{{$boba->temperature}}</p>
    <p>Topping:{{$boba->topping}}</p>
    <p>Sugar level:{{$boba->sugarLevel}}</p>
    <p>Ice amount:{{$boba->iceLevel}}</p>

    @can('admin-access')
    <a href='/bobas/{{$boba->id}}/edit'>
        <button class='btn-2'>Edit</button>
    </a>

    <form method='POST' action='/bobas'>
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$boba->id}}">
        <button class='btn-2' type='submit'>Delete</button>
    </form>
    @endcan

    @can('admin-or-user')
    <a href='/bobas/{{$boba->id}}/addReview'>
        <button class='btn-2'>Add Review</button>
    </a>
    @endcan

    <h2>Reviews:</h2>
    @if($boba->reviews->isEmpty())
        <p>No reviews yet. Be the first to review this boba!</p>
    @else
        <ul class="reviews-list">
            @foreach ($boba->reviews as $review)
                <li class="review-item">
                    <strong>{{ $review->name ?? 'Anonymous' }}</strong>: 
                    {{ $review->content ?? 'No content available' }} 
                    <span class="rating">Rating: {{ $review->rating ?? 'Not rated' }}/5</span>

                    <!-- Delete Button -->
                    @can('admin-or-user')
                    <form method="POST" action="{{ route('reviews.destroy', $review->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-2" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                    </form>
                    @endcan
                </li>
            @endforeach
        </ul>
    @endif

</x-layout>