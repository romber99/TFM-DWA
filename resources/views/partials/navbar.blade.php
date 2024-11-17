<nav>
    <div class="container">
        <a href="{{ route('catalog') }}">Inicio</a>

        <div>
            <ul>
                <li>
                    <a href="{{ route('movies.create') }}">Crear película</a>
                </li>
                <li>
                    <a href="{{ route('categories.catalog') }}">Categorías</a></a>
                </li>
                <li>
                    <a href="{{ route('actors.catalog') }}">Actores</a>
                </li>
                <li>
                    <a href="{{ route('ticket_types.catalog') }}">Tipos entrada</a>
                </li>
                <li>
                    <a href="#">Crear sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
