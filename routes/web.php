<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::post('/enviar-mensaje', [MensajeController::class, 'store'])->name('mensaje.store');
