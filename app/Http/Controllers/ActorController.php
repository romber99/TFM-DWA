<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActorRequest;
use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index() {
        $actors = Actor::all();
        return view('actors.catalog', compact('actors'));
    }

    public function create() {
        return view('actors.create');
    }

    public function store(StoreActorRequest $request) {
        Actor::create($request->validated());

        return redirect()->route('actors.catalog');
    }

    public function show() {}

    public function edit() {}

    public function update() {}

    public function destroy(string $id) {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect()->route('actors.catalog')->with('success', 'Actor eliminado con éxito');
    }
}
