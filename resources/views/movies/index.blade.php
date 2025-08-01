<x-template>
    <x-navbar />
    <x-movies.genre-menu />

    <main>

        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

            <div class="container mt-5">
                <div class="align-middle gap-2 d-flex justify-content-between">
                    <h3>Elenco Film inseriti</h3>
                    <form class="d-flex" role="search" action="#" method="POST">
                        <input class="form-control me-2" name="search" type="search" placeholder="Cerca Articolo"
                            aria-label="Search">
                    </form>
                    <a href="{{ route('movies.create') }}" class="btn btn btn-success me-md-2">
                        Crea Nuovo Film
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
                                        <img class="card-img-top"
                                            style="width:3rem"src="{{ Storage::url($movie->cover) }}" alt=""
                                            class="img-fluid">
                                    @else
                                        <img width="96" src="{{ Storage::url('cover/missing-image.jpg') }}"
                                            alt="" class="img-fluid">
                                    @endif
                                </td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->description }}</td>
                                <td>{{ $movie->release_year }}</td>
                                <td>{{ $movie->genre }}</td>
                                <td>{{ $movie->like }}</td>

                                <td>
                                    <div class="d-grid d-md-flex justify-content-md-end">
                                        <a href="#" class="btn btn-primary me-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg> </a>
                                        <a href="#" class="btn btn-warning me-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                            </svg> </a>
                                        <button type="button" class="btn btn-danger me-md-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg></button>
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
