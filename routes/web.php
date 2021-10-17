<?php

use App\Http\Controllers\ObraController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
   return view('home');
})->middleware(['auth'])
  ->name('home');

Route::get('/catalogo', [ObraController::class, 'index'])
    ->name('catalogo');
Route::delete('/catalogo/{obra}', [ObraController::class, 'destroy'])
    ->name('remover-obra');
Route::get('/obra/adicionar', [ObraController::class, 'create'])
    ->middleware(['auth'])
    ->name('adicionar-obra');
Route::post('/obra/adicionar', [ObraController::class, 'store'])
    ->middleware(['auth'])
    ->name('adicionar-obra');
Route::get('/obra/{obra}/edit', [ObraController::class, 'edit'])
    ->middleware(['auth'])
    ->name('editar-obra');
Route::put('/obra/{obra}', [ObraController::class, 'update'])
    ->middleware(['auth'])
    ->name('editar-obra');

require __DIR__.'/auth.php';
