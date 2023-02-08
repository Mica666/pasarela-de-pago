<?php
use App\Http\Controllers\Beneficiocontroller;
use App\Http\Controllers\Carteleracontroller;
use App\Http\Controllers\Combocontroller;
use App\Http\Controllers\Horariocontroller;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('Inicio.index');
Route::get('Inicio/{pelicula}', [InicioController::class, 'show'])->name('Inicio.show');

Route::get('/Cartelera', [Carteleracontroller::class, 'index'])->name('Cartelera.index');
Route::get('Cartelera/{pelicula}', [Carteleracontroller::class, 'show'])->name('Cartelera.show');

Route::get('/Beneficio', [Beneficiocontroller::class, 'index'])->name('Beneficio.index');

Route::get('/Combo', [Combocontroller::class, 'index'])->name('Combo.index');

Route::get('/Horario', [Horariocontroller::class, 'index'])->name('Horario.index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
