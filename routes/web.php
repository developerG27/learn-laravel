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

Route::get('/', function () {
  return '<h1>Hello world</h1>';
});

Route::get('/prova/{nome}', function ($nome = null) {
  $testo = '<h2>Testo da un route </h2>';
  $testo .= 'Nome: '.$nome;
  return $testo;
}); 

Route:get('/prova/animales', 'PruebasController@index');Route::get('/', function () {
  return '<h1>Hello world</h1>';
});