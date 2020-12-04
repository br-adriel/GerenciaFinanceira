<?php

use Illuminate\Support\Facades\Route;

//página inicial
Route::view('/', 'pagina-inicial')->name('pagina-inicial');

//página de login
Route::view('/entrar', 'entrar')->name('entrar');

//página de cadastro
Route::view('/cadastrar', 'cadastrar')->name('cadastrar');

//url para logoff do usuário
Route::get('/sair', function() {
	//redirecionat para a página de login
})->name('sair');


//crud receitas
Route::view('/receita/criar', 'receita.criar')->name('receita-criar');

Route::get('/receita/{id}', function($id) {
	return view('receita.receita', ['idReceita'=>$id]);
})->name('receita');

Route::get('/receita/{id}/editar', function($id) {
	return view('receita.editar', ['idReceita'=>$id]);
})->name('receita-editar');

Route::get('/receita/{id}/excluir', function($id) {
	//deleta a receita e volta para a pagina inicial
})->name('receita-excluir');


//crud despesas
Route::view('/despesa/criar', 'despesa.criar')->name('despesa-criar');

Route::get('/despesa/{id}', function($id) {
	return view('despesa.despesa', ['idDespesa'=>$id]);
})->name('despesa');

Route::get('/despesa/{id}/editar', function($id) {
	return view('despesa.editar', ['idDespesa'=>$id]);
})->name('despesa-editar');

Route::get('/despesa/{id}/excluir', function($id) {
	//deleta a despesa e volta para a pagina inicial
})->name('despesa-excluir');


//crud parcela da despesa
Route::get('/despesa/{$id}/parcela/criar', function($id) {
	return view('parcela.criar', ['idDespesa'=>$id]);
})->name('parcela-criar');

Route::get('/despesa/parcela/{id}', function($id) {
	return view('parcela.parcela', ['idParcela'=>$id]);
})->name('parcela');

Route::get('/despesa/parcelq/{id}/editar', function($id) {
	return view('parcela.editar', ['idParcela'=>$id]);
})->name('parcela-editar');

Route::get('/despesa/parcela/{id}/excluir', function($id) {
	//deleta a parcela e volta para a página de despesa
})->name('parcela-excluir');


//crud tipo da despesa
Route::get('/despesa/{id}/tipo/criar', function($id) {
	return view('tipo-despesa.criar', ['idDespesa'=>$id]);
})->name('tipo-despesa-criar');

Route::get('/despesa/tipo/{id}', function($id) {
	return view('tipo-despesa.tipo-despesa', ['idTipoDespesa'=>$id]);
})->name('tipo-despesa');

Route::get('/despesa/tipo/{id}/editar', function($id) {
	return view('tipo-despesa.editar', ['idTipoDespesa'=>$id]);
})->name('tipo-despesa-editar');

Route::get('/despesa/tipo/{id}/excluir', function($id) {
	//apaga o tipo de despesa e redireciona para a página de despesa
})->name('tipo-despesa-excluir');
