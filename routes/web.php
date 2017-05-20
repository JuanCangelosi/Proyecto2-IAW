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

Route::get('/obtenerprecargado', 'LenteController@obtenerPrecargado');
Route::post('/guardarprecargado', 'LenteController@guardarPrecargado');
Route::get('/obteneridprecargados', 'LenteController@obtenerIDPrecargados');

Route::get('/loadprecargado', 'LoadPrecargadoController@index');

Route::post('adminpanel/addmodelo', 'ModeloController@cargarModelo');
Route::post('adminpanel/addvidrio', 'VidrioController@cargarVidrio');
Route::post('adminpanel/addmarco', 'MarcoController@cargarMarco');
Route::post('adminpanel/addpatilla', 'PatillaController@cargarPatilla');
Route::post('adminpanel/addtamanos', 'TamanoController@cargarTamano');


Route::post('adminpanel/upmodelo', 'ModeloController@modificarModelo');
Route::post('adminpanel/upvidrio', 'VidrioController@modificarVidrio');


// Para ajax
Route::get('/modelos',function(){
    if(Request::ajax()){
        if(Auth::check() && Auth::user()->isAdmin())
            return App\Modelo::all();
    } 
});
Route::get('/vidrios',function(){
    if(Request::ajax()){
        if(Auth::check() && Auth::user()->isAdmin())
            return App\Vidrio::all();
    } 
});
Route::get('/marcos',function(){
    if(Request::ajax()){
        if(Auth::check() && Auth::user()->isAdmin())
            return App\Marco::all();
    } 
});
Route::get('/patilla',function(){
    if(Request::ajax()){
        if(Auth::check() && Auth::user()->isAdmin())
            return App\Patilla::all();
    } 
});
Route::get('/tamanos',function(){
    if(Request::ajax()){
        if(Auth::check() && Auth::user()->isAdmin())
            return App\Tamano::all();
    } 
});
