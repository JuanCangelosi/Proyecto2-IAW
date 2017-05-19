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
    return view('welcome');
});

Route::get('/about', function() {

    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('auth/facebook', 'SocialAuthController@redirectToProvider')->name('fblogin');
Route::get('auth/facebook/callback', 'SocialAuthController@handleProviderCallback');

Route::get('/customize', 'LenteController@index');


Route::get('/loadprecargado', 'LoadPrecargadoController@index');

Route::post('adminpanel/addmodelo', 'ModeloController@cargarModelo');
Route::post('adminpanel/addvidrio', 'ModeloController@cargarVidrio');
Route::post('adminpanel/addmarco', 'ModeloController@cargarMarco');
Route::post('adminpanel/addpatilla', 'ModeloController@cargarPatilla');
Route::post('adminpanel/addtamano', 'ModeloController@cargarTamano');