<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludos', function () {
    return 'Hola amiguitos';
})->name('saluditos');

Route::get('/bienvenidos', function () {
    return view( 'bienvenido');
})->name('bienvenidos');
