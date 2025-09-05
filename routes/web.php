<?php
// CRUD

//use Illuminate\Support\Facades\Route; siempre y cuando no se haya agregado antes

use App\Http\Controllers\CrudController;

// Rutas para las vistas Blade de Crud (usuarios)
Route::get('/usuarios', [CrudController::class, 'vistaIndex'])->name('usuarios.index');
Route::get('/usuarios/create', [CrudController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [CrudController::class, 'storeWeb'])->name('usuarios.store');
Route::get('/usuarios/{codigo}/edit', [CrudController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{codigo}', [CrudController::class, 'updateWeb'])->name('usuarios.update');
Route::delete('/usuarios/{codigo}', [CrudController::class, 'destroyWeb'])->name('usuarios.destroy');

use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/{codigo}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{codigo}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{codigo}', [ProductoController::class, 'destroy'])->name('productos.destroy');
use App\Http\Controllers\VentaController;

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::resource('productos', ProductoController::class);
Route::resource('ventas', VentaController::class)->only(['index', 'create', 'store']);


