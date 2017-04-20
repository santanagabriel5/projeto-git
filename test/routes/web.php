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
    return view('welcome');
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

Route::get('/disciplina/json', 'DisciplinaController@listaJson');
// Posts


Route::get('/disciplina/detalhes','PostsController@lista');

Route::get('/disciplina/posts/detalhes/{id}','PostsController@mostra')->where('id','[0-9]+');

Route::get('/disciplina/posts/novo/{id}','PostsController@novo');

Route::post('/disciplina/posts/adiciona/{id}','PostsController@adiciona');

Route::get('/disciplina/posts/atualizar/{id}','PostsController@atualizar');

Route::post('/disciplina/posts/atualiza','PostsController@atualiza');

Route::get('/disciplina/post/remove/{id}','PostsController@remove');

Route::get('/disciplina/posts/json', 'PostsController@listaJson');
