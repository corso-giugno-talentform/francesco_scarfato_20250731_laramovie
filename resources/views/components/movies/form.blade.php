<form action="{{ route('movies.store') }}" 
    method="post"
    enctype="multipart/form-data">

    @csrf

    <div class="form-group">
        <label for="formFile" class="form-label">Locandina</label>
        <input class="form-control" type="file" id="image" name="cover">
        @error('cover')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="name">Titolo</label>
        <input id="title" class="form-control" name="title" type="text" placeholder="Inserisci il titolo"
            value="{{ old('title') }}" />
        @error('title')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Descrizione</label>
        <input id="description" class="form-control" name="description" type="text" placeholder="Inserisci la descrizione"
            value="{{ old('description') }}" />
        @error('description')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="page">Categoria</label>
        <input id="genre" class="form-control" name="genre" type="text"
            placeholder="Inserisci la categoria" value="{{ old('genre') }}" />
        @error('genre')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="release_year">Anno</label>
        <input id="release_year" class="form-control" name="release_year" type="text" placeholder="Anno"
            value="{{ old('release_year') }}" />
        @error('release_year')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="duration">Durata</label>
        <input id="duration" class="form-control" name="duration" type="text" placeholder="Durata (hh:mm)"
            value="{{ old('duration') }}" />
        @error('duration')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="page">Likes</label>
        <input id="like" class="form-control" name="like" type="text"
            placeholder="Inserisci I like (max 5)" value="{{ old('like') }}" />
        @error('like')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Annulla</a>
</form>
