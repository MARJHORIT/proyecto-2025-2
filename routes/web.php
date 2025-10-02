<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludos', function (): string {
    return 'Hello World';
});

Route::get('/bienvenido', function () {

    return view( 'bienvenido');
});