<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::paginate(3); Movie::all();
        return view('movies/index', compact("movies"));
    }

    public function show($movie){
        $movie = Movie::find($movie);
        return view('movies/show', compact("movie"));
    }

    public function create(){
        return view('movies/create');
    }

    public function store(MovieRequest $request) {
        $formData = $request->all();

        Movie::create($formData);

        return redirect('movies');
    }

    public function edit($movie) {
        $movie = Movie::findOrFail($movie);
        return view('movies.edit', compact("movie"));
    }

    public function update(MovieRequest $request, $movie) {
        $formData = $request->all();
        $movie = Movie::findOrFail($movie);
        $movie->update($formData);

        return redirect('movies');
    }

    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }

    public function destroy(Movie $movie) {
        $movie->reviews()->delete();
        $movie->delete();
        return redirect('movies');
    }

    public function showDeleted() {
        $movies = Movie::onlyTrashed()->get();
        return view('movies/manage', compact("movies"));
    }

    public function restore($movie) {
        Movie::withTrashed()->where('id', $movie)->restore();
        Movie::findOrFail($movie)->reviews()->restore();

        return redirect('movies');
    }

    public function forceDelete($movie) {
        Movie::onlyTrashed()->where('id', $movie)->forceDelete();
        return redirect('movies');
    }
}
