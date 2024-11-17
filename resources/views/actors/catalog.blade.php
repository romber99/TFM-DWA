@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todos los actores</h1>
        <a href="{{ route('actors.create') }}">Crear actor/actriz</a>

        <div>
            @foreach($actors as $actor)
            <div class="card">
                <h4>{{ $actor->first_name }} {{ $actor->last_name }}</h4>
                <p>Día nacimiento: {{ $actor->birthdate }}</p>
                <a href="{{ route('actors.destroy', $actor->id) }}">Eliminar</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
