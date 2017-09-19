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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/banner-principal', 'AdminController@bannerPrincipal');
Route::post('/banner-principal', 'AdminController@changePrincipal');

Route::get('/servicios', 'ServiciosController@servicios');
Route::post('/servicios', 'ServiciosController@editarServicios');

Route::get('/noticias', 'AdminController@noticias');
Route::post('/noticias', 'AdminController@changenoticias');

Route::get('/eventos', 'AdminController@eventos');
Route::post('/eventos', 'AdminController@changeEventos');

Route::get('/canciones', 'CancionesController@canciones');
Route::post('/canciones/agregar', 'CancionesController@agregarCanciones');
Route::post('/canciones/editar', 'CancionesController@editarCanciones');
Route::get('/canciones/eliminar/{id}', 'CancionesController@eliminarCanciones');

Route::get('/calendario', 'CalendarioController@calendario');
Route::post('/calendario', 'CalendarioController@editarCalendario');

Route::get('/galeria', 'AdminController@galeria');
Route::post('/galeria', 'AdminController@changeGaleria');

Route::get('/instagram', 'AdminController@instagram');
Route::post('/instagram', 'AdminController@changeInstagram');

Route::get('/admin', function () {
    return view('administrador.login');
});