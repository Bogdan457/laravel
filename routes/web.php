<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Models\History;
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
    return view('home');
});
Route::group(['middleware' => ['auth','admin']], function() {
Route::get('admin', [App\Http\Controllers\admin\PostsController::class, 'admin'])->name('admin');
});
Route::group(['middleware' => ['auth','allstories']], function() {
  Route::resource('allstories', HistoryController::class);
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
