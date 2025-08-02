<x-template>
    <x-navbar />
    <div class="container">
        <div class="row">
            <div id="show-movie">
                <h1>Scheda del film</h1>
                <x-movies.form-show :$movie/>
            </div>
        </div>
    </div>

    <x-footer />
</x-template>
