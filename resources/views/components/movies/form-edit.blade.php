<div class="row">
    <form action="{{ route('movies.update', ['movie' => $movie]) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-group">
            <div class="thmbnail">
                @if (!empty($movie->cover))
                    <img src="{{ Storage::url($movie->cover) }}" class="card-img-top img-fluid" style="width:3rem"
                        alt="">
                @else
                    <img src="{{ Storage::url('cover/missing-image.jpg') }}" class="card-img-top img-fluid"
                        style="width:3rem" alt="">
                @endif
                <label for="formFile" class="form-label">Locandina</label>
                <input id="image" name="cover" class="form-control" type="file">
                @error('cover')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Titolo</label>
                <input id="title" name="title" type="text" class="form-control"
                    placeholder="Inserisci il titolo" value="{{ $movie->title }}" />
                @error('title')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea id="description" name="description" class="form-control"
                    rows="5"
                    placeholder="Inserisci la descrizione"/>{{ $movie->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="page">Categoria</label>
                <input id="genre" name="genre" type="text" class="form-control"
                    placeholder="Inserisci la categoria" value="{{ $movie->genre }}" />
                @error('genre')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="release_year">Anno</label>
                <input id="release_year" name="release_year" type="text" class="form-control" placeholder="Anno"
                    value="{{ $movie->release_year }}" />
                @error('release_year')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="duration">Durata</label>
                <input id="duration" name="duration" type="text" class="form-control" placeholder="Durata (hh:mm)"
                    value="{{ $movie->duration }}" />
                @error('duration')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="page">Likes</label>
                <input id="like" name="like" type="text" class="form-control"
                    placeholder="Inserisci I like (max 5)" value="{{ $movie->like }}" />
                @error('like')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary">Aggiorna</button>
            <a href="{{ route('movies.index') }}" class="btn btn-primary">Annulla</a>
        </div>
    </form>
</div>
