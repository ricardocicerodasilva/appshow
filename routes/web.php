<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

Route::get('/',[EventosController::class,'MostrarHome'])->name('home-adm');
Route::get('/cadastra-evento',[EventosController::class,'MostrarCadastroEvento'])->name('show-cadastro-evento');
Route::get('/listaEventos',[EventosController::class,'MostraEventoNome'])->name('lista-evento');
Route::get('/altera-evento/{id}',[EventosController::class,'MostrarEventoCodigo'])->name('show-altera-evento');

// para cadastrar
Route::post('/cadastra-evento',[EventosController::class,'CadastrarEventos'])->name('cadastra-evento');

//para deletar
Route::delete('/apaga-evento/{id}',[EventosController::class,'destroy'])->name('apaga-evento');

//para alterar
Route::put('/altera-evento/{id}',[EventosController::class,'Update'])->name('altera-evento');