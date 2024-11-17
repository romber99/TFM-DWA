@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Catálogo películas</h1>

        <div>
            @foreach($movies as $movie)
            <div class="card">
                <h4>{{ $movie->title }}</h4>
                <p>Duración: {{ $movie->duration_min }}</p>
                <p>Audiencia: {{ $movie->audience }}</p>
                <p>Resumen: {{ $movie->synopsis }}</p>
                <p>Valoración: {{ $movie->rating }}</p>
                <p></p>
                <p>
                    <strong>Categorías:</strong>
                    {{ $movie->categories->pluck('name')->join(', ') }}
                </p>
                <p>
                    <strong>Actores:</strong>
                    {{ $movie->actors->map(fn($actor) => $actor->first_name . ' ' . $actor->last_name)->join(', ') }}
                </p>
                <a href="{{ route('movies.show', $movie->id) }}">Ver detalles | </a>
                <a href="{{ route('movies.edit', $movie->id) }}">Modificar | </a>
                <a href="{{ route('movies.destroy', $movie->id) }}">Eliminar | </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
