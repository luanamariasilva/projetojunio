<?php

use Illuminate\Support\Facades\Route;

Route::get('/templates', function () {

    return view('header');
});


use App\Http\Controllers\EventController;

Route::get('/', [EventController ::class, 'index']);
Route::post('/', [EventController::class, 'storelogalt']);

Route::get('/home', [EventController ::class, 'home']);

Route::get('/pesquisar', [EventController::class, 'pesquisar']);

Route::get('/cadastro', [EventController::class, 'cadastro']);
Route::post('/cadastro', [EventController::class, 'storelog']);


Route::get('/cadastraproduto', [EventController::class, 'cadastraproduto']);
Route::post('/cadastraproduto', [EventController::class, 'store']);






