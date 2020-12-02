<?php

use Illuminate\Support\Facades\Route;

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

//Aula ao-vivo
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function() {
    //return "Olá pessoal";

    $lista = [
        'Maria',
        'João',
        'José',
    ];
    
    return view('users', ['usuarios'=> $lista]);
});

Route::get('/user/{nome}', function($nome){
	return $nome;
})->name('usuario-ind');
*/



//Rotas da tarefa 30/11/2020
//página inicial
Route::get('/', function() {
	return view('pagina-inicial');
})->name('pagina-inicial');

//página de login
Route::get('/entrar', function() {
	return view('entrar');
})->name('entrar');

//página de cadastro
Route::get('/cadastrar', function() {
	return view('cadastrar');
})->name('cadastrar');

//url para logoff do usuário
Route::get('/sair', function() {
	//redirecionat para a página de login
})->name('sair');


//crud receitas
Route::get('/receita/criar', function() {
	return view('receita-criar');
})->name('receita-criar');

Route::get('/receita/{id}', function($id) {
	return view('receita', ['idReceita'=>$id]);
})->name('receita');

Route::get('/receita/{id}/editar', function($id) {
	return view('receita-editar', ['idReceita'=>$id]);
})->name('receita-editar');

Route::get('/receita/{id}/excluir', function($id) {
	//deleta a receita e volta para a pagina inicial
})->name('receita-excluir');


//crud despesas
Route::get('/despesa/criar', function() {
	return view('despesa-criar');
})->name('despesa-criar');

Route::get('/despesa/{id}', function($id) {
	return view('despesa', ['idDespesa'=>$id]);
})->name('despesa');

Route::get('/despesa/{id}/editar', function($id) {
	return view('despesa-editar', ['idDespesa'=>$id]);
})->name('despesa-editar');

Route::get('/despesa/{id}/excluir', function($id) {
	//deleta a despesa e volta para a pagina inicial
})->name('despesa-excluir');


//crud parcela da despesa
Route::get('/despesa/{$id}/parcela/criar', function($id) {
	return view('parcela-criar', ['idDespesa'=>$id]);
})->name('parcela-criar');

Route::get('/despesa/parcela/{id}', function($id) {
	return view('parcela', ['idParcela'=>$id]);
})->name('parcela');

Route::get('/despesa/parcelq/{id}/editar', function($id) {
	return view('parcela-editar', ['idParcela'=>$id]);
})->name('parcela-editar');

Route::get('/despesa/parcela/{id}/excluir', function($id) {
	//deleta a parcela e volta para a página de despesa
})->name('parcela-excluir');


//crud tipo da despesa
Route::get('/despesa/{id}/tipo/criar', function($id) {
	return view('tipo-despesa-criar', ['idDespesa'=>$id]);
})->name('tipo-despesa-criar');

Route::get('/despesa/tipo/{id}', function($id) {
	return view('tipo-despesa', ['idTipoDespesa'=>$id]);
})->name('tipo-despesa');

Route::get('/despesa/tipo/{id}/editar', function($id) {
	return view('tipo-despesa-editar', ['idTipoDespesa'=>$id]);
})->name('tipo-despesa-editar');

Route::get('/despesa/tipo/{id}/excluir', function($id) {
	//apaga o tipo de despesa e redireciona para a página de despesa
})->name('tipo-despesa-excluir');