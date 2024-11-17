@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear categoría</h1>

        <form action="{{ route('categories.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="" required />
            </div>

            <button type="submit">Guardar</button>
        </form>

    </div>
@endsection
