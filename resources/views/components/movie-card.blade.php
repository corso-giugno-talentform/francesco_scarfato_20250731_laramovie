@foreach ($movies as $movie)
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            @if (!empty($movie->cover))
                <img class="card-img-top" src="{{ Storage::url($movie->cover) }}" alt="">
            @else
                <img class="card-img-top" src="{{ Storage::url('cover/missing-image.jpg') }}" alt="">
            @endif

            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">{{ $movie->title }}</h5>
                    <p>{{ $movie->genre }} - {{ $movie->release_year }}</p>

                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < $movie->like)
                                <div class="bi-star-fill"></div>
                            @else
                                <div class="bi-star"></div>
                            @endif
                        @endfor ($movie->like as $start)
                    </div>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                    <a class="btn btn-outline-dark mt-auto" href="{{ route('movies.show', ['movie' => $movie]) }}">Vai al film</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
