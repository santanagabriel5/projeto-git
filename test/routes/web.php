<?php

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


Route::get('/test', 'UsuarioController@test');
Route::get('/hello', 'UsuarioController@hello');


Route::get('/', function () {
    return view('auth/login');
});


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

Route::get('/perfil', 'AccountSettingsController@lista');
Route::get('/perfil/atualizar/{id}','AccountSettingsController@updateAccount');

Route::post('/perfil/atualiza','AccountSettingsController@atualiza');

Route::get('/disciplina', 'DisciplinaController@lista');

Route::get('/disciplina/todas', 'DisciplinaController@listagemAluno');

Route::get('/disciplina/mostra/{id}','DisciplinaController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/novo','DisciplinaController@novo');

Route::post('/disciplina/adiciona','DisciplinaController@adiciona');

Route::get('/disciplina/atualizar/{id}','DisciplinaController@atualizar');

Route::post('/disciplina/atualiza/{id}','DisciplinaController@atualiza');


Route::get('/disciplina/remove/{id}','DisciplinaController@remove');

Route::get('/disciplina/permitiracesso/{id}','DisciplinaController@permitiracesso');
Route::get('/disciplina/negarcesso/{id}','DisciplinaController@negarcesso');



Route::get('/disciplina/json', 'DisciplinaController@listaJson');

Route::get('/disciplina/matricula/{id}','DisciplinaController@matricula');

Route::get('/disciplina/matricular/{id}','DisciplinaController@matricular');

Route::get('/disciplina/listaralunos/{id}','DisciplinaController@listaralunospendentes');





// Posts


Route::get('/disciplina/secao/detalhes','PostsController@lista');

Route::get('/disciplina/secao/posts/detalhes/{id}','PostsController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/secao/posts/novo/{id}','PostsController@novo');

Route::post('/disciplina/secao/posts/adiciona/{id}','PostsController@adiciona');

Route::get('/disciplina/secao/posts/atualizar/{id}','PostsController@atualizar');

Route::post('/disciplina/secao/posts/atualiza/{id}','PostsController@atualiza');

Route::get('/disciplina/secao/post/remove/{id}','PostsController@remove');

Route::get('/disciplina/secao/posts/json', 'PostsController@listaJson');

// Secao

Route::get('/disciplina/detalhes','SecaoController@lista');

Route::get('/disciplina/secao/detalhes/{id}','SecaoController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/secao/novo/{id}','SecaoController@novo');

Route::post('/disciplina/secao/adiciona/{id}','SecaoController@adiciona');

Route::get('/disciplina/secao/atualizar/{id}','SecaoController@atualizar');

Route::post('/disciplina/secao/atualiza/{id}','SecaoController@atualiza');

Route::get('/disciplina/secao/remove/{id}','SecaoController@remove');

Route::get('/disciplina/secao/json', 'SecaoController@listaJson');



//Route::post('/comentarios/{id}', 'PostsController@AdicionarComentario');

Route::post('/comentarios/cadastro/{id}', 'PostsController@AdicionarComentario');

//TESTE DE UP DE ARQUIVO
Route::post('/avatars', 'UploadController@uploaddearquivo');
Route::get('/telas/test', 'UploadController@tela');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// TAREFA


Route::get('/disciplina/secao/detalhes','TarefaController@lista');

Route::get('/disciplina/secao/tarefa/detalhes/{id}','TarefaController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/secao/tarefa/novo/{id}','TarefaController@novo');

Route::post('/disciplina/secao/tarefa/adiciona/{id}','TarefaController@adiciona');

Route::get('/disciplina/secao/tarefa/atualizar/{id}','TarefaController@atualizar');

Route::post('/disciplina/secao/tarefa/atualiza/{id}','TarefaController@atualiza');

Route::get('/disciplina/secao/tarefa/remove/{id}','TarefaController@remove');

Route::get('/disciplina/secao/tarefa/json', 'TarefaController@listaJson');
