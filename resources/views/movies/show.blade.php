@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $movie->title }}</h1>

        <p><strong>Duración:</strong> {{ $movie->duration_min }} minutos</p>
        <p><strong>Audiencia:</strong> {{ $movie->audience }}</p>
        <p><strong>Año de lanzamiento:</strong> {{ $movie->release_year }}</p>
        <p><strong>Sinopsis:</strong> {{ $movie->synopsis }}</p>
        <p><strong>Valoración:</strong> {{ $movie->rating }}</p>
        <p><strong>Tráiler:</strong>
            <a href="{{ $movie->url_trailer }}" target="_blank">Ver tráiler</a>
        </p>
        <p><strong>Categorías:</strong> {{ $movie->categories->pluck('name')->join(', ') }}</p>
        <p><strong>Actores:</strong>
            {{ $movie->actors->map(fn($actor) => $actor->first_name . ' ' . $actor->last_name)->join(', ') }}
        </p>

        <a href="{{ route('catalog') }}">Volver al catálogo</a>
    </div>
    @endsection
