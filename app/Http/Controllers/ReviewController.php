<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Boba;

class ReviewController extends Controller
{
    // Display the form to add a review for a specific boba
    public function create($bobaId)
    {
        $boba = Boba::findOrFail($bobaId); // Ensure the Boba exists
        return view('reviews.create', ['boba' => $boba]);
    }

    // Store a new review in the database
    public function store(Request $request, $bobaId)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Find the related Boba
        $boba = Boba::findOrFail($bobaId);

        // Create and save the new review
        $review = new Review();
        $review->boba_id = $boba->id;
        $review->name = $validated['name'];
        $review->content = $validated['content'];
        $review->rating = $validated['rating'];
        $review->save();

        return redirect()->route('boba.show', $bobaId)
                         ->with('success', 'Review added successfully!');
    }

    // Show the details of a specific review (if required)
    public function show($id)
    {
        $review = Review::findOrFail($id); // Ensure the review exists
        return view('reviews.show', ['review' => $review]);
    }

    public function destroy($id)
    {
        // Find the review by its ID
        $review = Review::findOrFail($id);

        // Store the related boba ID to redirect back after deletion
        $bobaId = $review->boba_id;

        // Delete the review
        $review->delete();

        // Redirect back to the boba's details page with a success message
        return redirect()->route('boba.show', $bobaId)
                         ->with('success', 'Review deleted successfully!');
    }
}


