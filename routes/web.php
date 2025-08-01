<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');


// ### Gestione Film
// 5. **Creare risorsa Films** con le seguenti rotte:
//    - INDEX (visualizzazione lista)
//    - CREATE (form creazione - solo admin)
//    - STORE (salvataggio - solo admin)

Route::middleware(['auth'])->group(function () {
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::get('/movies/{movie}/details', [MovieController::class, 'detail'])->name('movies.details');
    Route::post('/movies/store', [MovieController::class, 'store'])->name('movies.store');
});