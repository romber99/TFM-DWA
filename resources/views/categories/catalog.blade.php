@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todas las categorías</h1>
        <a href="{{ route('categories.create') }}">Crear categoría</a>

        <div>
            @foreach($categories as $category)
            <div class="card">
                <table border="1">
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('categories.destroy', $category->id) }}">Eliminar | </a></td>
                    </tr>
                </table>
            </div>
            @endforeach
        </div>
    </div>
@endsection
