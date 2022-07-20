<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Review;
use App\Movie;

class ReviewController extends Controller
{
    public function index() {
        //return "This is my new Review Controller";
        //$testing = "Passing data...";

        $reviews = Review::paginate(7); DB::table('reviews')->get();
        return view('reviews/index', compact("reviews"));
    }

    public function show($review) {
        $review = Review::find($review);
        return view('reviews/show', compact("review"));
    }

    public function create() {
        $movies = Movie::all()->pluck('name','id');
        $tags = Tag::all()->pluck('name','id');
        return view('reviews.create', compact("movies", "tags"));
    }

    public function store(Request $request) {
        $movie = Movie::findOrFail($request->movie_id);
        $review = new Review($request->all());
        $review->author_id = 1;
        $review->movie()->associate($movie)->save();
        $review->tags()->sync($request->tags);
        if ($request->hasFile('file') &&
            $request->file('file')->isValid()) {
            $path = $request->file->storePublicly('$reviews', 'public');
            $review->file = $path;
            $review->save();
        }
        return redirect('reviews');
    }


//    public function edit($review) {
//        $review = Review::findOrFail($review);
//        return view('reviews.edit', compact("review"));
//    }

    public function destroy(Review $review) {
        $review->delete();
        return redirect('reviews');
    }


}
