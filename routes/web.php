<?php

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

Route::get('user', [\App\Http\Controllers\User\ShowController::class, 'index']);
Route::get('user/edit/{user_id}', [\App\Http\Controllers\User\EditController::class, 'edit']);
Route::post('user/edit/{user_id}', [\App\Http\Controllers\User\EditController::class, 'update']);
Route::get('user/delete/{user_id}', [\App\Http\Controllers\User\DeleteController::class, 'delete']);
