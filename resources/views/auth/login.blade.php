<x-template>
    <x-navbar />
    <x-header />

    <div class="container">
        <!-- Section-->
        <section class="py-5">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                    @error('email')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('email')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Login</button>

                <a href="{{ route('register') }}">Registrati</a>
            </form>
        </section>
    </div>
    <x-footer />
</x-template>
