<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Servicio\ServicioController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->resource('servicio',ServicioController::class)
->names('servicio');
;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
