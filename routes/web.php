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

    Route::get('/usuarios', 'UserController@index');

    Route::get('/usuarios/nuevo', 'UserController@create');

    Route::post('/usuarios/crear', 'UserController@store');

    Route::put('/usuarios/{user}', 'UserController@update');

    Route::get('/usuarios/{user}', 'UserController@show')->where('id', '[0-9]+');

    Route::delete('/usuarios/eliminar/{user}', 'UserController@destroy');

    Route::get('/saludos/{name}/{nickname}', 'WelcomeUserController@index');




    //rutas para las vistas estaticas
    Route::get('/parroquia', function(){
        return view('sanjudas/parroquia');
    });

    Route::get('/quienesSomos', function(){
        return view('sanjudas/quienesSomos');
    });

    Route::get('/contacto', function(){
        return view('sanjudas/contacto');
    });

    Route::get('/register', function(){
        return view('sanjudas/register');
    });

    Route::get('/login', function(){
        return view('sanjudas/login');
    });

?>


