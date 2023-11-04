<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});


Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/listaDevs', function () {
    return view('listadevs');
});
