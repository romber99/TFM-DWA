<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketTypeRequest;
use App\Models\TicketType;
use Illuminate\Http\Request;

class TicketTypeController extends Controller
{
    public function index() {
        $ticket_types = TicketType::all();
        return view('ticket_types.catalog', compact('ticket_types'));
    }

    public function create() {
        return view('ticket_types.create');
    }

    public function store(StoreTicketTypeRequest $request) {
        TicketType::create($request->validated());

        return redirect()->route('ticket_types.catalog');
    }

    public function show() {}

    public function edit() {}

    public function update() {}

    public function destroy(string $id) {
        $actor = TicketType::find($id);
        $actor->delete();
        return redirect()->route('ticket_types.catalog')->with('success', 'Tipo de entrada eliminado con éxito');
    }
}
