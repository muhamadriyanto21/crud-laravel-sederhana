<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/product', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'cobaFunction'] );

Route::get('/user/{nama}/{umur}', [UserController::class, 'sebutNamaFunction'] );

Route::get('/users', [UserController::class, 'index'] )->name('users');
Route::get('/users/create', [UserController::class, 'create'] )->name('create');
Route::get('/users/{id}', [UserController::class, 'show'] )->name('detail');
Route::get('/users/{id}/edit', [UserController::class, 'edit'] )->name('edit');
Route::get('/users/{id}/delete', [UserController::class, 'delete'] )->name('delete');
Route::post('/users/store', [UserController::class, 'store'] )->name('store');
Route::post('/users/{id}/update', [UserController::class, 'update'] )->name('update');



