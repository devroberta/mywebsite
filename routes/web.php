<?php

use Illuminate\Support\Facades\Route;
use Appzio\Http\Controllers\EventController;

Route::get('/', [\App\Http\Controllers\EventController::class,'index']);

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/listadevs', function () {
    return view('listadevs');
});
