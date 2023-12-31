<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
route::middleware(['auth'])->Group(function(){
    Route::get('/',[BookController::class,'book']);
    Route::get('/tambah',[BookController::class,'tambah']);
    Route::post('/store',[BookController::class,'store']);
    Route::get('/{id}/edit',[BookController::class,'edit']);
    Route::put('/{id}',[BookController::class,'update']);
    Route::delete('/{id}',[BookController::class,'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
