<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a  href="{{ route('homepage') }}" class="navbar-brand">{{ env('APP_NAME') }}</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item">
                    <a href="{{ route('homepage') }}" class="nav-link">Home</a>
                </li>
                
                @auth
                    @if (Auth::user()->checkIfAdmin())

                    <li class="nav-item">
                        <a href="{{ route('movies.index') }}" class="nav-link">Gestione Film</a>
                    </li>
                    @endif
                @endauth
            </ul>

            <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                @auth
                    <li class="nav-item">
                        <a href="#" class="nav-link">Ciao, {{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="nav-link" type="submit">Esci</button>
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