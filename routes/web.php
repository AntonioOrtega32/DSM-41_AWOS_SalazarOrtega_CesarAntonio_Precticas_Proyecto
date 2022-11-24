<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
    return view(view:'layouts.admin');
});
/*↓Aqui son las vistas de clientes*/
Route::get('/clients', [ClientController::class,'index'])->name('clients');
Route::get('/clients/createcli', [ClientController::class,'create']);
Route::post('/clients/creaClient', [ClientController::class,'creaClient'])->name('createClient');
Route::get('/delete/{clients_id}', [ClientController::class,'delete'])->name('deleteClient');/* ← Elimina los registros de la base de datos (Da errores actualmente)*/

/*↓Aqui son las vistas de productos*/
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/createpro', [ProductController::class, 'create']);
Route::post('/products/creaProduct', [ProductController::class,'creaProduct'])->name('createProduct');
Route::get('/delete/{products_id}', [ProductController::class,'delete'])->name('deleteProduct');/* ← Elimina los registros de la base de datos*/

/*↓Aqui son las vistas de Usuario*/
Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/users/createusu', [UserController::class,'create']);
Route::post('/users/creaUser', [UserController::class,'creaUser'])->name('createUser');
Route::get('/delete/{users_id}', [UserController::class,'delete'])->name('deleteUser');/* ← Elimina los registros de la base de datos*/

/*↓Aqui son las vistas de categorias*/
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::get('/categories/createcat', [CategoryController::class,'create']);
Route::post('/categories/creaCategory', [CategoryController::class,'creaCategory'])->name('createCategory');
Route::get('/delete/{categories_id}', [CategoryController::class,'delete'])->name('deleteCategory');/* ← Elimina los registros de la base de datos*/
 