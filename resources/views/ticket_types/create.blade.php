@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear tipo de entrada</h1>

        <form action="{{ route('ticket_types.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="" required />
            </div>

            <div class="form-group">
                <label for="discount">Descuento</label>
                <input type="number" name="discount" id="discount" value="0" required />
            </div>

            <div class="form-group">
                <label for="promotion">Promoción</label>
                <input type="text" name="promotion" id="promotion" value="" required />
            </div>

            <button type="submit">Guardar</button>
        </form>

    </div>
@endsection
