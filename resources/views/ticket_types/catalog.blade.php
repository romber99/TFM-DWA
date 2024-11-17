@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todos los tipos de entrada</h1>
        <a href="{{ route('ticket_types.create') }}">Crear tipo de entrada</a>

        <div>
            @foreach($ticket_types as $ticket_type)
            <div class="card">
                <h4>{{ $ticket_type->name }}</h4>
                <p>Descuento: {{ $ticket_type->discount }}</p>
                <p>Promoción: {{ $ticket_type->promotion }}</p>
                <a href="{{ route('ticket_types.destroy', $ticket_type->id) }}">Eliminar</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
