<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/posts');
})->middleware(['auth'])->name('dashboard');


Route::resource("posts",PostController::class)->middleware('auth');


Route::get("users/create",[UserController::class,"create"])->middleware('auth');
Route::post("users",[UserController::class,"store"])->middleware('auth');

require __DIR__.'/auth.php';
