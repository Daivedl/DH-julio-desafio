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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/inicio', 'InicioController@inicio');

Route::get('/detallePelicula/{id}','PeliculasController@detallePelicula');
Route::get('/titulos','PeliculasController@todos');
//Route::get('/titulos/busquedaTitulos{search}', 'PeliculasController@search');
/*Route::get('inicio/searchredirect', function(){

     Nuevo: si el argumento search está vacío regresar a la página anterior
    if (empty('search')) return redirect()->back();

    $search = urlencode(e('search'));
    $route = "inicio/search/$search";
    return redirect($route);
});

Route::get("inicio/search/{search}", "InicioController@search");
*/
Route::get('busquedaTitulos','InicioController@buscador');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::post('/create','PeliculasController@create');
Route::get('/','PeliculasController@read');
Route::post('/update/{id}','PeliculasController@update');
Route::delete('/delete/{id}','PeliculasController@delete');
Route::get('/update/{id}','PeliculasController@edit');
Route::get('/delete/{id}','PeliculasController@preguntar'); */

/*Route::get('/abm','PeliculasController@index');
Route::get('/abm/create','PeliculasController@create');*/

Route::resource('abm','PeliculasController')->middleware('admin');
