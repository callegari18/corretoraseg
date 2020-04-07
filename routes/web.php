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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CorretoraController@home')->name('home');
Route::get('sobre', 'CorretoraController@sobre')->name('sobre');
Route::get('pesquisar', 'CorretoraController@pesquisar')->name('pesquisar');
Route::get('orcamento', 'CorretoraController@orcamento')->name('orcamento');
Route::get('contato', 'CorretoraController@contato')->name('contato');
// Route::get('orcamento', function(){
//      echo ('<h1> AQUI SERÁ A PAGINA DE COTAÇÃO ONLINE </h1>');
// })->name ('orcamento');
// Route::get('contato', function(){
//      echo ('<h1> AQUI SERÁ A PAGINA DE ENDEREÇO E TELEFONE </h1>');
// })->name ('contato');