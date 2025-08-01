<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\ReservasController;
use App\Models\Reservas;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/campos', [CamposController::class, 'index'])->name('campos.index');
    Route::post('/campos', [CamposController::class, 'store'])->name('campos.store');
    Route::get('/campos/create', [CamposController::class, 'create'])->name('campos.create');
    Route::delete('/campos/{campo}', [CamposController::class, 'destroy'])->name('campos.destroy');
    Route::put('/campos/{campo}', [CamposController::class, 'update'])->name('campos.update');
    Route::get('/campos/{campo}/edit', [CamposController::class, 'edit'])->name('campos.edit');

    Route::get('/jugadores', [JugadoresController::class, 'index'])->name('jugadores.index');
    Route::post('/jugadores', [JugadoresController::class, 'store'])->name('jugadores.store');
    Route::get('/jugadores/create', [JugadoresController::class, 'create'])->name('jugadores.create');
    Route::delete('/jugadores/{jugador}', [JugadoresController::class, 'destroy'])->name('jugadores.destroy');
    Route::put('/jugadores/{jugador}', [JugadoresController::class, 'update'])->name('jugadores.update');
    Route::get('/jugadores/{jugador}/edit', [JugadoresController::class, 'edit'])->name('jugadores.edit');

    Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas.index');
    Route::post('/reservas', [ReservasController::class, 'store'])->name('reservas.store');
    Route::get('/reservas/create', [ReservasController::class, 'create'])->name('reservas.create');
    Route::delete('/reservas/{reserva}', [ReservasController::class, 'destroy'])->name('reservas.destroy');
    Route::put('/reservas/{reserva}', [ReservasController::class, 'update'])->name('reservas.update');
    Route::get('/reservas/{reserva}/edit', [ReservasController::class, 'edit'])->name('reservas.edit');
});

require __DIR__ . '/auth.php';
