<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\view;
use App\Models\Estudiante;

Route::get('/', function () {
    
    $estudiante = new Estudiante();
    $estudiante->nombres = 'Marjhorit';
    $estudiante->pri_ape = 'Herrera';
    $estudiante->seg_ape = 'sifuentes';
    $estudiante->save();

    return $estudiante;


   // return 'Aqui trabajare con la tabla estudiantes';

    //return view('welcome')
});

Route::get('/saludos', function () {
    return 'Hola amiguitos';
})->name('saluditos');

Route::get('/bienvenido', function () {
    return view( 'bienvenido');
})->name('bienvenidos');

Route::get('/estudiantes', function () {
    return view( 'estudiantes');
})->name('estudiantes');
