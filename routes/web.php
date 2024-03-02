<?php

use App\Http\Controllers\EnderecoController;
use Illuminate\Support\Facades\Route;

Route::get('/', EnderecoController::class)->name('home');
Route::get('/buscar', [EnderecoController::class, 'buscar'])->name('buscar');

Route::get('/adicionar', [EnderecoController::class, 'adicionar'])->name('adicionar');

Route::post('/salvar', [EnderecoController::class, 'salvar'])->name('salvar');

// Route::get('/', function () {
//     $teste = new EnderecoController();
//     $teste->show();
// })->name('home');
