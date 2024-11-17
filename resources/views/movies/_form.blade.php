<form action="{{ $action }}" method="post">
    @csrf
    @if($method ?? false)
        @method($method)
    @endif

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ old('title', $movie->title ?? '') }}" required />
    </div>

    <div class="form-group">
        <label for="synopsis">Sinopsis</label>
        <textarea name="synopsis" id="synopsis" cols="30" rows="10">{{ old('synopsis', $movie->synopsis ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="release_year">Año de lanzamiento</label>
        <input type="text" name="release_year" id="release_year" value="{{ old('release_year', $movie->release_year ?? '') }}" required />
    </div>

    <div class="form-group">
        <label for="duration_min">Duración (minutos)</label>
        <input type="text" name="duration_min" id="duration_min" value="{{ old('duration_min', $movie->duration_min ?? '') }}" required />
    </div>

    <div class="form-group">
        <label for="rating">Valoración</label>
        <input type="text" name="rating" id="rating" value="{{ old('rating', $movie->rating ?? '') }}" />
    </div>

    <div class="form-group">
        <label for="audience">Audiencia</label>
        <input type="text" name="audience" id="audience" value="{{ old('audience', $movie->audience ?? '') }}" required />
    </div>

    <div class="form-group">
        <label for="url_trailer">URL Tráiler</label>
        <input type="text" name="url_trailer" id="url_trailer" value="{{ old('url_trailer', $movie->url_trailer ?? '') }}" />
    </div>

    <div class="form-group">
        <label for="categories">Categorías</label>
        <select name="categories[]" id="categories" multiple>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($movie) && $movie->categories->contains($category->id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="actors">Actores</label>
        <select name="actors[]" id="actors" class="form-control" multiple>
            @foreach($actors as $actor)
                <option value="{{ $actor->id }}" {{ isset($movie) && $movie->actors->contains($actor->id) ? 'selected' : '' }}>
                    {{ $actor->first_name }} {{ $actor->last_name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Guardar</button>
</form>
