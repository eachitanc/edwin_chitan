<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Administracion;
use App\Http\Controllers\Productos;
use App\Http\Controllers\Contacto;
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

Route::get('/', [Administracion::class, 'index']);
Route::get('nosotros', [Administracion::class, 'informacion'] );
Route::get('productos_gatos', [Productos::class, 'prod_gatos'] );
Route::get('productos_perros', [Productos::class, 'prod_perros'] );
Route::get('contactos', [Contacto::class, 'contacto'] );
