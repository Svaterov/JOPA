<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app'); 
});

// Маршрут для основного каталога
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

// Маршрут для подкаталогов
Route::get('/catalog/{category}', [CatalogController::class, 'show'])->name('catalog.show');