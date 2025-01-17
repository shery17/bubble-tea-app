<x-layout title="Add a Review">
    <h1>Add a Review for {{ $boba->name }}</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('reviews.store', $boba->id) }}">
        @csrf
        <div>
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="content">Your Review:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn-2">Save Review</button>
    </form>
</x-layout>
