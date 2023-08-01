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
    Route::get('/', [InscritoController::class, 'showInscritos'])->name('showInscritos');  
    Route::get('/inscritos/export/', [InscritoController::class, 'export'])->name('exportInscritos');
    Route::delete('/inscritos/{inscrito}/', [InscritoController::class,
    'deleteInscrito']);
    Route::get('/inscritos', [InscritoController::class, 'showInscritos']);
    Route::get('/inscritos/{name}', [InscritoController::class, 'createInscrito']); //post
    Route::get('/inscritos/{inscrito}/{rua}', [InscritoController::class, 'addEndereco']); //post
});

Route::get('phpmyinfo', function () {
    phpinfo(); 
})->name('phpmyinfo');