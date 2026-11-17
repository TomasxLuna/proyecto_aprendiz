<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::get('/asignar_citas', function () {
    return view('asignar_citas');
})->name('asignar_citas');

Route::get('/iniciar_sesion', function () {
    return view('iniciar_sesion');
})->name('iniciar_sesion');