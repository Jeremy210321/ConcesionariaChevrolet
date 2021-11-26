<?php

use App\Http\Controllers\AutoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PersonalController;
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

// ROUTE PARA PRESENTAR UN TEXTO UTILIZANDO EL MÉTODO GET
Route::get('demo1', function () {
    return 'Hola Laravel';
});
// ROUTE PARA PRESENTAR UN JSON UTILIZANDO EL MÉTODO GET 
Route::get('demo2', function () {
    return '{
        "Nombre":"Jeremy",
        "Apellido":"León",
        "Ciudad":"Quito"
    }';
});

// PROBLEMA DE LAS RUTAS SIN EL MÉTODO NAME
Route::get('service',function(){
    return'
          <a href="servicios">servicios</a>
          <br>
          <a href="servicios">servicios</a>
          <br>
          <a href="servicios">servicios</a>
          <br>
          <a href="servicios">servicios</a>
    ';
}) -> name('servicios');





// ROUTE PARA MANDAR DATOS A LA VISTA

Route::get('/', function () {
    return view('home');
}) -> name('home');



Route::get('modelos',ModeloController::class)->name('models');
    


Route::get('personal',[PersonalController::class,'personal'])->name('personal');

Route::view('nosotros','nosotros')->name('about');


Route::get('/contactos/{name?}',[ContactoController::class,'dataContact'])->name('contact');

Route::resource('autos',AutoController::class) -> except('index', 'destroy');

// Route::get('autos','App\Http\Controllers\AutoController@index')->name('allstores');
// Route::delete('autos','App\Http\Controllers\AutoController@destroy')->name('destroystore');