@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear película</h1>

        @include('movies._form', [
            'action' => route('movies.store'),
            'method' => 'POST',
            'movie' => null,
            'categories' => $categories,
            'actors' => $actors
        ])
    </div>
@endsection
