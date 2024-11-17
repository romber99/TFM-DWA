<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.catalog', compact('categories'));
    }

    public function create() {
        return view('categories.create');
    }

    public function store(Request $request) {
        Category::create($request->validate(['name' => 'required|string']));

        return redirect()->route('categories.catalog');
    }

    public function show() {}

    public function edit() {}

    public function update() {}

    public function destroy(string $id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.catalog')->with('success', 'Categoría eliminada con éxito');
    }
}
