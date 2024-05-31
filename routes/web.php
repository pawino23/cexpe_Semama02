<?php

use App\Http\Controllers\TalleresController;

Route::get('/', function () {
    return view('home');
});

Route::get('/programas', function () {
    return view('programas');
});

Route::get('/asesoramiento', function () {
    return view('asesoramiento');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/talleres', function () {
    return view('talleres');
});

Route::get('/talleres/{taller}', [TalleresController::class, 'show']);
