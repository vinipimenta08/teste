<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'web'], function(){

    Route::get('/', [HomeController::class, 'index']);

    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');

});


Route::group(['middleware' => 'auth'], function(){

    Route::get('/usuarios', [UsersController::class, 'index']);

    Route::get('/usuario/novo', [UsersController::class, 'new']);
    Route::post('/usuario', [UsersController::class, 'store']);

    Route::get('/usuarios/{id}/editar', [UsersController::class, 'edit']);
    Route::get('/usuarios/{id}', [UsersController::class, 'show']);
    Route::post('/usuario/{id}', [UsersController::class, 'update']);
    Route::delete('/usuario/{id}', [UsersController::class, 'destroy']);


});
