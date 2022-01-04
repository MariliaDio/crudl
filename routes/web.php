<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::any('usuarios/search', [UsuarioController::class, 'search'])->name('usuarios.search');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios/edit{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');
