<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenziaController;
use App\Http\Controllers\PacchettoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//http://localhost:8000/api


//GET http://localhost:8000/api/agenzie/3
Route::get('/agenzie/{id}', [AgenziaController::class, 'read']);
//GET http://localhost:8000/api/agenzie
Route::get('/agenzie', [AgenziaController::class, 'readAll']);
//GET http://localhost:8000/api/listaagenzie
Route::get('/listaagenzie', [AgenziaController::class, 'listAll']);

//GET http://localhost:8000/api/pacchetti/3
Route::get('/pacchetti/{id}', [PacchettoController::class, 'read']);
//GET http://localhost:8000/api/pacchetti
Route::get('/pacchetti', [PacchettoController::class, 'readAll']);
