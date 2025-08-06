<x-template>
    <x-navbar />
    <x-movies.genre-menu />

    
        <x-alert :type="session('message_type')" />
    

    <main>
        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

            <div class="container mt-5">
                <div class="align-middle gap-2 d-flex justify-content-between">
                    <h3>Elenco Film</h3>
                    <form class="d-flex" action="#" role="search" method="POST">
                        @csrf
                        <input name="search" type="search" class="form-control me-2" placeholder="Cerca Film"
                            aria-label="Search">
                    </form>
                    <a href="{{ route('movies.create') }}" class="btn btn btn-success me-md-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </a>
                </div>
                <table class="table border mt-2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Locandina</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Anno</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Likes</th>
                            <th scope="col col-md-1"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($movies as $movie)
                            <tr>
                                <th scope="row">{{ $movie->id }}</th>
                                <td>
                                    @if (!empty($movie->cover))
                                        <img src="{{ Storage::url($movie->cover) }}"
                                            class="card-img-top img-fluid"
                                            style="width:3rem" alt="">
                                    @else
                                        <img src="{{ Storage::url('cover/missing-image.jpg') }}"
                                            class="card-img-top img-fluid" style="width:3rem" 
                                            alt="">
                                    @endif
                                </td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->description }}</td>
                                <td>{{ $movie->release_year }}</td>
                                <td>{{ $movie->genre }}</td>
                                <td>{{ $movie->like }}</td>

                                <td>
                                    <div class="d-grid d-md-flex justify-content-md-end">
                                        <a href="{{ route('movies.show', ['movie' => $movie]) }}" class="btn btn-primary me-md-2">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('movies.edit', ['movie' => $movie]) }}" class="btn btn-warning me-md-2">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <button type="button"
                                            onclick="setMovieId({{ $movie->id }})"
                                            class="btn btn-danger me-md-2"
                                            data-bs-toggle="modal"                                           
                                            data-bs-target="#deleteModal">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <x-footer />
</x-template>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">Conferma Cancellazione</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Sei sicuro di voler cancellare questo film?<br />Questa azione non è reversibile.</p>
            </div>
            
            <form id="modal-delete-form" class="d-flex" action="#" role="search" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" id="modal-movie-id" name="modal-movie-id" value="" />
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <button type="submit" class="btn btn-danger" id="confirmDelete">Cancella</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
function setMovieId(movieId) {
    console.log(movieId);
    let modalForm = document.getElementById('modal-delete-form');
    let modalValue = document.getElementById('modal-movie-id');
    modalForm.action = 'movies/' + movieId;

    modalValue.value = movieId;
    console.log(modalValue);
    console.log(modalAction);
    console.log(movieId);
}
</script>