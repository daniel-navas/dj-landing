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
    return view('index');
});

Route::get('/admin', function () {
    return view('administrador.login');
});
Route::get('/calendario', function () {
    return view('administrador.calendario');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/banner-principal', 'AdminController@bannerPrincipal');
Route::post('/banner-principal', 'AdminController@changePrincipal');

Route::get('/servicios', 'AdminController@servicios');
Route::post('/servicios', 'AdminController@changeServicios');

Route::get('/noticias', 'AdminController@noticias');
Route::post('/noticias', 'AdminController@changenoticias');

Route::get('/eventos', 'AdminController@eventos');
Route::post('/eventos', 'AdminController@changeEventos');

Route::get('/canciones', 'AdminController@canciones');
Route::post('/canciones', 'AdminController@changeCanciones');

//Route::get('/calendario', 'AdminController@calendario');
Route::post('/calendario', 'AdminController@changeCalendario');

Route::get('/galeria', 'AdminController@galeria');
Route::post('/galeria', 'AdminController@changeGaleria');

Route::get('/instagram', 'AdminController@instagram');
Route::post('/instagram', 'AdminController@changeInstagram');




