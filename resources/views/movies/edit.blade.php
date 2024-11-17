@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Actualizar película</h1>

        @include('movies._form', [
            'action' => route('movies.update', $movie->id),
            'method' => 'PUT',
            'movie' => $movie,
            'categories' => $categories,
            'actors' => $actors
        ])
    </div>
@endsection
