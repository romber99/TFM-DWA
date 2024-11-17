@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear actor</h1>

        <form action="{{ route('actors.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" id="first_name" value="" required />
            </div>

            <div class="form-group">
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" id="last_name" value="" required />
            </div>

            <div class="form-group">
                <label for="birthdate">Día nacimiento</label>
                <input type="date" name="birthdate" id="birthdate" value="" required />
            </div>

            <button type="submit">Guardar</button>
        </form>

    </div>
@endsection
