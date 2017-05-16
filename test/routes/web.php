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

Route::get('/disciplina', 'DisciplinaController@lista');


Route::get('/disciplina/mostra/{id}','DisciplinaController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/novo','DisciplinaController@novo');

Route::post('/disciplina/adiciona','DisciplinaController@adiciona');

Route::get('/disciplina/atualizar/{id}','DisciplinaController@atualizar');

Route::post('/disciplina/atualiza','DisciplinaController@atualiza');


Route::get('/disciplina/remove/{id}','DisciplinaController@remove');

Route::get('/disciplina/permitiracesso/{id}','DisciplinaController@permitiracesso');
Route::get('/disciplina/negarcesso/{id}','DisciplinaController@negarcesso');



Route::get('/disciplina/json', 'DisciplinaController@listaJson');

Route::get('/disciplina/matricula/{id}','DisciplinaController@matricula');

Route::get('/disciplina/matricular/{id}','DisciplinaController@matricular');

Route::get('/disciplina/listaralunos/{id}','DisciplinaController@listaralunospendentes');





// Posts


Route::get('/disciplina/secao/posts/detalhes','PostsController@lista');

Route::get('/disciplina/secao/posts/detalhes/{id}','PostsController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/secao/posts/novo/{id}','PostsController@novo');

Route::post('/disciplina/secao/posts/adiciona/{id}','PostsController@adiciona');

Route::get('/disciplina/secao/posts/atualizar/{id}','PostsController@atualizar');

Route::post('/disciplina/secao/posts/atualiza','PostsController@atualiza');

Route::get('/disciplina/secao/post/remove/{id}','PostsController@remove');

Route::get('/disciplina/secao/posts/json', 'PostsController@listaJson');

// Secao

Route::get('/disciplina/detalhes','SecaoController@lista');

Route::get('/disciplina/secao/detalhes/{id}','SecaoController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/secao/novo/{id}','SecaoController@novo');

Route::post('/disciplina/secao/adiciona/{id}','SecaoController@adiciona');

Route::get('/disciplina/secao/atualizar/{id}','SecaoController@atualizar');

Route::post('/disciplina/secao/atualiza','SecaoController@atualiza');

Route::get('/disciplina/secao/remove/{id}','SecaoController@remove');

Route::get('/disciplina/secao/json', 'SecaoController@listaJson');



//Route::post('/comentarios/{id}', 'PostsController@AdicionarComentario');

Route::post('/comentarios/cadastro/{id}', 'PostsController@AdicionarComentario');

//TESTE DE UP DE ARQUIVO

Route::get('image-upload-with-validation',['as'=>'getimage','uses'=>'PostsController@getImage']);
Route::post('image-upload-with-validation',['as'=>'postimage','uses'=>'PostsController@postImage']);
