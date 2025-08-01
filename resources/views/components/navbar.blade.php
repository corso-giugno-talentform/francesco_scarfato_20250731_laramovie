<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('homepage') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>
                
                @auth
                <li class="nav-item"><a class="nav-link" href="{{ route('movies.index') }}">Gestione Film</a></li>
                @endauth
            </ul>

            <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="">Ciao, {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link" type="submit">logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Registrati</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>