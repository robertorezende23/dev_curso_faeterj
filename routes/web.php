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

Route::get('/aulas', function () {
    return view('aulas');
});
Route::get('/contato', function () {
    return view('contato');
});

Route::get('/', 'CursoController@index');

Route::get('/home', 'CursoController@index');

Route::get('/cursos', 'CursoController@index');

Route::get('/curso/{id}', 'CursoController@show_cursos');

//Cadastro curso
Route::get('/cadastro/cursos', 'CursoController@cadastro');
Route::post('/cadastro/cursos/salvar', 'CursoController@salvar_curso')->name('salvar_curso');

//Cadastro modulos
Route::get('/cadastro/modulos', 'CursoController@cadastro_modulos');
Route::post('/cadastro/modulos/salvar', 'CursoController@salvar_modulo')->name('salvar_modulo');

//Cadastro aulas
Route::get('/cadastro/aulas', 'CursoController@cadastro_aulas');
Route::post('/cadastro/aulas/salvar', 'CursoController@salvar_aula')->name('salvar_aula');

//Cadastro user
Route::get('/cadastro/user', 'CursoController@cadastro_user');
Route::post('/cadastro/user/salvar', 'CursoController@salvar_user')->name('salvar_user');
