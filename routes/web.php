<?php

use App\Http\Controllers\InscritoController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::get('/', function () {
    return Inertia::render('Home', [
        'title' => 'Xuxa'
    ]);
});


Route::get('/inscritos', [InscritoController::class, 'showInscritos']);
Route::get('/inscritos/{name}', [InscritoController::class, 'createInscrito']);
Route::get('/inscritos/{inscrito}/{rua}', [InscritoController::class, 'addEndereco']);
Route::get('/inscritos/delete/endereco/{inscrito}/', [InscritoController::class, 'deleteEndereco']);


