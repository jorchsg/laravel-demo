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
})->name('main');

Route::get('/tareas', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('index');;




Route::delete('/tasks/{id}','TaskController@destroy')->middleware('auth');

Route::get('/tasks/edit/{id}', 'TaskController@edit')->name('tasks.edit');
Route::post('/tasks', 'TaskController@store')->name('tasks.store');
