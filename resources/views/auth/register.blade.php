<x-template>
    <x-navbar />
    <x-header />

    <div class="container">

    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input id="name" name="name" type="name" class="form-control"
                value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control"
                value="{{ old('email') }}">
            @error('email')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" class="form-control">
            @error('password')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">Conferma Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
            @error('password_confirmation')
            <div class="alert alert-danger mt-2" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrati</button>

        <a href="{{ route('login') }}">Login</a>
    </form>
    </div>
    <x-footer />
</x-template>
