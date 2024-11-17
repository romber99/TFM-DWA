<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Category;
use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::with('categories', 'actors')->get();
        return view('catalog', compact('movies'));
    }

    public function create() {
        $categories = Category::all();
        $actors = Actor::all();
        return view('movies.create', compact('categories', 'actors'));
    }

    public function store(StoreMovieRequest $request) {
        $movie = Movie::create($request->validated());

        if ($request->has('categories')) $movie->categories()->sync($request->input('categories'));
        if ($request->has('actors')) $movie->actors()->sync($request->input('actors'));

        return redirect()->route('catalog')->with('success', 'Película guardada con éxito');
    }

    public function show(string $id) {
        $movie = Movie::with('categories', 'actors')->findOrFail($id); // si no ecuentra la peli, da error 404

        return view('movies.show', compact('movie'));
    }

    public function edit(string $id) {
        $movie = Movie::with('categories', 'actors')->findOrFail($id);
        $categories = Category::all();
        $actors = Actor::all();

        return view('movies.edit', compact('movie', 'categories', 'actors'));
    }

    public function update(StoreMovieRequest $request, string $id) {
        $movie = Movie::findOrFail($id);
        $movie->update($request->validated());

        $movie->categories()->sync($request->input('categories', []));
        $movie->actors()->sync($request->input('actors', []));

        return redirect()->route('catalog')->with('success', 'Película actualizada con éxito');
    }

    public function destroy(string $id) {
        $movie = Movie::find($id);

        // Eliminar las relaciones
        $movie->categories()->detach();
        $movie->actors()->detach();

        $movie->delete();

        return redirect()->route('catalog')->with('success', 'Película eliminada con éxito');
    }

}
