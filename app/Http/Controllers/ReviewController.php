<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::all();
        return view('review.index', compact('reviews'));
    }

    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'stars' => 'integer',
            'image' => 'image|file|max:25000',
        ]);

        $validated = $validator->validated();

        $validated['excerpt'] = Str::limit($request->description, 100, ' ');

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('reviews');
        }

        Review::create($validated);

        return redirect()->route('review.index')->with('status', "review successfully created");
    }

    public function destroy(Review $review)
    {
        if ($review->image) {
            Storage::delete($review->image);
        }

        Review::destroy($review->id);

        return redirect()->route('review.index')->with('status', "review successfully deleted");
    }
}
