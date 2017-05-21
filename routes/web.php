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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('readme');
});

Route::get('/personalizador', function() {
    return view('welcome');
});

Auth::routes();

Route::get('auth/facebook', 'SocialAuthController@redirectToProvider')->name('fblogin');
Route::get('auth/facebook/callback', 'SocialAuthController@handleProviderCallback');

Route::get('/customize', 'LenteController@index');

Route::get('/obtenerprecargado', 'LenteController@obtenerPrecargado');
Route::post('/guardarprecargado', 'LenteController@guardarPrecargado');
Route::get('/obteneridprecargados', 'LenteController@obtenerIDPrecargados');
Route::post('/guardarLente', 'LenteController@guardarLente');
Route::get('/obtenerGuardado', 'LenteController@obtenerGuardado');

Route::get('/loadprecargado', 'LoadPrecargadoController@index');

Route::post('adminpanel/addmodelo', 'ModeloController@cargarModelo');
Route::post('adminpanel/addvidrio', 'VidrioController@cargarVidrio');
Route::post('adminpanel/addmarco', 'MarcoController@cargarMarco');
Route::post('adminpanel/addpatilla', 'PatillaController@cargarPatilla');
Route::post('adminpanel/addtamanos', 'TamanoController@cargarTamano');


Route::post('adminpanel/upmodelo', 'ModeloController@modificarModelo');
Route::post('adminpanel/upvidrio', 'VidrioController@modificarVidrio');
Route::post('adminpanel/uptamano', 'TamanoController@modificarTamano');
Route::post('adminpanel/upmarco', 'MarcoController@modificarMarco');
Route::post('adminpanel/uppatilla', 'PatillaController@modificarPatilla');

Route::post('adminpanel/upprecargado', 'LenteController@modificarPrecargado');

Route::get('/modelos', 'ModeloController@getModelos');
Route::get('/vidrios', 'VidrioController@getVidrios');
Route::get('/marcos', 'MarcoController@getMarcos');
Route::get('/patillas', 'PatillaController@getPatillas');
Route::get('/tamanos', 'TamanoController@getTamanos');
Route::get('/precargados', 'LenteController@getPrecargados');
Route::get('/guardados', 'LenteController@getLentesGuardados');

Route::get('/precargados/caracteristicas', 'LenteController@getCaracteristicas');
Route::get('/vidrios/colores', 'VidrioController@getColores');
Route::get('/marcos/colores', 'MarcoController@getColores');
Route::get('/patillas/colores', 'PatillaController@getColores');


