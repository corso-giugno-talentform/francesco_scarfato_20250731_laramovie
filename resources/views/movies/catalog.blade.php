<x-template>
    <x-navbar />

    <main>
        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">

            <div class="container mt-5">
                <div class="align-middle gap-2 d-flex justify-content-between">
                    <h3>Catalogo Film</h3>
                    <form class="d-flex" action="#" role="search" method="POST">
                        @csrf
                        <input name="search" type="search" class="form-control me-2" placeholder="Cerca Film"
                            aria-label="Search">
                    </form>
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
