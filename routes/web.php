<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\ParcelaController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\TipoDespesaController;

//página inicial
Route::view('/', 'index')->name('pagina-inicial');

//página de login
Route::get('/entrar', [AutenticacaoController::class, 'entrar']
)->name('entrar');

//página de cadastro
Route::get('/cadastrar', [AutenticacaoController::class, 'cadastrar']
)->name('cadastrar');

//url para logoff do usuário
Route::get('/sair', function() {
	//redirecionat para a página de login
})->name('sair');


//crud receitas
Route::resource('receitas', ReceitaController::class);

//crud despesas
Route::resource('despesas', DespesaController::class);

//crud parcela da despesa
Route::resource('parcelas', ParcelaController::class);

//crud tipo da despesa
Route::resource('tipos-de-despesa', TipoDespesaController::class);
