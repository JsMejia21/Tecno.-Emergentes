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
    return view('welcome');
});

Auth::routes();
//Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

//Tipos de usuario
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD Productos
Route::get('/productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos');
Route::get('/productos/create', [App\Http\Controllers\productosController::class, 'create'])->name('create');
Route::post('/productos/create', [App\Http\Controllers\productosController::class, 'store'])->name('store');
Route::get('/productos/{id}/edit', [App\Http\Controllers\productosController::class, 'edit']);
Route::post('/productos/{id}/edit', [App\Http\Controllers\productosController::class, 'update']);
Route::delete('/productos/{id}', [App\Http\Controllers\productosController::class, 'destroy']);

//CRUD Categorias
Route::get('/categorias', [App\Http\Controllers\categoriasController::class, 'index'])->name('categorias');
Route::get('/categorias/create', [App\Http\Controllers\categoriasController::class, 'create'])->name('createcat');
Route::post('/categorias/create', [App\Http\Controllers\categoriasController::class, 'store'])->name('storecat');
Route::get('/categorias/{id}/editcat', [App\Http\Controllers\categoriasController::class, 'edit']);
Route::post('/categorias/{id}/editcat', [App\Http\Controllers\categoriasController::class, 'update']);
Route::delete('/categorias/{id}', [App\Http\Controllers\categoriasController::class, 'destroy']);

//CRUD Almacenes
Route::get('/almacenes', [App\Http\Controllers\almacenesController::class, 'index'])->name('almacenes');
Route::get('/almacenes/create', [App\Http\Controllers\almacenesController::class, 'create'])->name('createalma');
Route::post('/almacenes/create', [App\Http\Controllers\almacenesController::class, 'store'])->name('storealma');
Route::get('/almacenes/{id}/editalma', [App\Http\Controllers\almacenesController::class, 'edit']);
Route::post('/almacenes/{id}/editalma', [App\Http\Controllers\almacenesController::class, 'update']);
Route::delete('/almacenes/{id}', [App\Http\Controllers\almacenesController::class, 'destroy']);

//CRUD Proveedores
Route::get('/proveedores', [App\Http\Controllers\proveedoresController::class, 'index'])->name('proveedores');
Route::get('/proveedore/create', [App\Http\Controllers\proveedoresController::class, 'create'])->name('createprov');
Route::post('/proveedores/create', [App\Http\Controllers\proveedoresController::class, 'store'])->name('storeprov');
Route::get('/proveedores/{id}/editprov', [App\Http\Controllers\proveedoresController::class, 'edit']);
Route::post('/proveedores/{id}/editprov', [App\Http\Controllers\proveedoresController::class, 'update']);
Route::delete('/proveedores/{id}', [App\Http\Controllers\proveedoresController::class, 'destroy']);

//CRUD Ventas
Route::get('/ventas', [App\Http\Controllers\ventasController::class, 'index'])->name('ventas');
Route::get('/ventas/create', [App\Http\Controllers\ventasController::class, 'create'])->name('createvent');
Route::post('/ventas/create', [App\Http\Controllers\ventasController::class, 'store'])->name('storevent');
Route::get('/ventas/{id}/editvent', [App\Http\Controllers\ventasController::class, 'edit']);
Route::post('/ventas/{id}/editvent', [App\Http\Controllers\ventasController::class, 'update']);
Route::delete('/ventas/{id}', [App\Http\Controllers\ventasController::class, 'destroy']);

//CRUD Compras
Route::get('/compras', [App\Http\Controllers\comprasController::class, 'index'])->name('compras');
Route::get('/compras/create', [App\Http\Controllers\comprasController::class, 'create'])->name('createcomp');
Route::post('/compras/create', [App\Http\Controllers\comprasController::class, 'store'])->name('storecomp');
Route::get('/compras/{id}/editcomp', [App\Http\Controllers\comprasController::class, 'edit']);
Route::post('/compras/{id}/editcomp', [App\Http\Controllers\comprasController::class, 'update']);
Route::delete('/compras/{id}', [App\Http\Controllers\comprasController::class, 'destroy']);

//CRUD Usuarios