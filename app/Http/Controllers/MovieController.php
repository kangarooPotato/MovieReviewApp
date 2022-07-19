<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $categories = Movie::paginate(3); Movie::all();
        return view('categories/index', compact("categories"));
    }

    public function show($category){
        $category = Movie::find($category);
        return view('categories/show', compact("category"));
    }

    public function create(){
        return view('categories/create');
    }

    public function store(MovieRequest $request) {
        $formData = $request->all();

        Movie::create($formData);

        return redirect('categories');
    }

    public function edit($category) {
        $category = Movie::findOrFail($category);
        return view('categories.edit', compact("category"));
    }

    public function update(MovieRequest $request, $category) {
        $formData = $request->all();
        $category = Movie::findOrFail($category);
        $category->update($formData);

        return redirect('categories');
    }

    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }

    public function destroy(Movie $category) {
        $category->articles()->delete();
        $category->delete();
        return redirect('categories');
    }

    public function showDeleted() {
        $categories = Movie::onlyTrashed()->get();
        return view('categories/manage', compact("categories"));
    }

    public function restore($category) {
        Movie::withTrashed()->where('id', $category)->restore();
        Movie::findOrFail($category)->articles()->restore();

        return redirect('categories');
    }

    public function forceDelete($category) {
        Movie::onlyTrashed()->where('id', $category)->forceDelete();
        return redirect('categories');
    }
}
