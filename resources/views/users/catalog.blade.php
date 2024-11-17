@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todos los usuarios</h1>
        {{-- <a href="{{ route('users.create') }}">Crear tipo de entrada</a> --}}

        <div>
            <table>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->password }}</td>
                    {{-- <td><a href="{{ route('users.edit', $user->id) }}">Modificar</a></td>
                    <td><a href="{{ route('users.destroy', $user->id) }}">Eliminar</a></td> --}}
                </tr>
            @endforeach
        </table>
        </div>
    </div>
@endsection
