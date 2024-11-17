<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('example');
});

Route::get('/catalog', [MovieController::class, 'index'])->name('catalog');
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('movies/{id}/edit', [MovieController::class,'edit'])->name('movies.edit');
Route::put('movies/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::get('movies/{id}/delete', [MovieController:: class, 'destroy'])->name('movies.destroy');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.catalog');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}/delete', [CategoryController:: class, 'destroy'])->name('categories.destroy');

Route::get('/actors', [ActorController::class, 'index'])->name('actors.catalog');
Route::get('/actors/create', [ActorController::class, 'create'])->name('actors.create');
Route::post('/actors', [ActorController::class, 'store'])->name('actors.store');
Route::get('actors/{id}/delete', [ActorController:: class, 'destroy'])->name('actors.destroy');

Route::get('/ticket-types', [TicketTypeController::class, 'index'])->name('ticket_types.catalog');
Route::get('/ticket-types/create', [TicketTypeController::class, 'create'])->name('ticket_types.create');
Route::post('/ticket-types', [TicketTypeController::class, 'store'])->name('ticket_types.store');
Route::get('ticket-types/{id}/delete', [TicketTypeController:: class, 'destroy'])->name('ticket_types.destroy');

Route::get('/users', [UserController::class, 'index'])->name('sessionas.catalog');
