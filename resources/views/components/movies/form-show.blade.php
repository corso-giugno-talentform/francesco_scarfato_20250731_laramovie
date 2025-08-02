    <div class="row">
        <div class="thmbnail">
            Locandina: 
            @if (!empty($movie->cover))
                <img src="{{ Storage::url($movie->cover) }}" class="card-img-top img-fluid" style="width:3rem" alt="">
            @else
                <img src="{{ Storage::url('cover/missing-image.jpg') }}" class="card-img-top img-fluid" style="width:3rem"
                    alt="">
            @endif
    </div>

    <div class="row">
        Titolo: {{ $movie->title }}
    </div>

    <div class="row">
        Descrizione: {{ $movie->description }}
    </div>

    <div class="row">
        Categoria: {{ $movie->genre }}
    </div>

    <div class="row">
        Anno: {{ $movie->release_year }}
    </div>

    <div class="row">
        Durata: {{ $movie->duration }}
    </div>

    <div class="row">
        Likes: {{ $movie->like }}
    </div>

    <div class="row">
        <a href="{{ route('movies.index') }}" class="btn btn-primary">Torna in home</a>
    </div>
</form>
