<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MostrarController;

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
    return view('inicio/index');
});

Route::view('/inicio', 'inicio/index')->name('inicio');
Route::view('/login', 'sesion/index')->name('login');
Route::view('/contacto', 'contacto/index')->name('contacto');
Route::view('/sucursales', 'sucursales/index')->name('sucursales');




Route::view('/sesion', 'sesion/index')->name('sesion');
Route::view('/pagos', 'pagos/index')->name('pagos');



Route::resource('/productos', ProductoController::class);
Route::resource('/catalogo', MostrarController::class);


// Route::view('/dash', 'privado.producto.index')->name('dash');
