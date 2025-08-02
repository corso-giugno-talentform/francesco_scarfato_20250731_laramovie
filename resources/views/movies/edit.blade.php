<x-template>
    <x-navbar />
    <div class="container">
        <div class="row">
            <div id="create-movie">
                <h1>Aggiorna scheda film</h1>
                <x-movies.form-edit :$movie/>
            </div>
        </div>
    </div>

    <x-footer />
</x-template>
