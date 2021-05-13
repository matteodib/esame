<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('todo/attivi', [TodoController::class, 'todo_attivi']);

Route::resource('todo', TodoController::class);
require __DIR__.'/auth.php';

//Route::get('todo/attivi', [TodoController::class, 'todo_attivi']);
Auth::routes();

