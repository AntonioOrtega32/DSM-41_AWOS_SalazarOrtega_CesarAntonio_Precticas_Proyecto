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
Route::get('/clients/showcli/{clients}', [ClientController::class,'show'])->name('showcli');
Route::get('/clients/view/{clients_id}', [ClientController::class,'view'])->name('viewcli');
Route::post('/clients/updateClient', [ClientController::class,'updateClient'])->name('updateClient');
Route::get('/clients/deleteClient/{clients_id}', [ClientController::class,'deleteClient'])->name('delcli');



/*↓Aqui son las vistas de productos*/
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::get('/products/createpro', [ProductController::class, 'create']);
Route::post('/products/creaProduct', [ProductController::class,'creaProduct'])->name('createProduct');
Route::get('/products/showpro/{products}', [ProductController::class,'show'])->name('showpro');
Route::get('/products/view/{product_id}', [ProductController::class,'view'])->name('viewpro');
Route::post('/Products/updateProduct', [ProductController::class,'updateProduct'])->name('updateProduct');
Route::get('/products/deleteProduct/{product_id}', [ProductController::class,'deleteProduct'])->name('delpro');

/*↓Aqui son las vistas de Usuario*/
Route::get('/users', [UserController::class,'index'])->name('users');
Route::get('/users/createusu', [UserController::class,'create']);
Route::post('/users/creaUser', [UserController::class,'creaUser'])->name('createUser');
Route::get('/users/showusu/{users}', [UserController::class,'show'])->name('showusu');
Route::get('/users/view/{user_id}', [UserController::class,'view'])->name('viewusu');
Route::post('/users/updateUser', [UserController::class,'updateUser'])->name('updateUser');
Route::get('/users/deleteUser/{user_id}', [UserController::class,'deleteUser'])->name('delusu');


/*↓Aqui son las vistas de categorias*/
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::get('/categories/createcat', [CategoryController::class,'create']);
Route::post('/categories/creaCategory', [CategoryController::class,'creaCategory'])->name('createCategory');
Route::get('/categories/showcat/{categories}', [CategoryController::class,'show'])->name('showcat');
Route::get('/categories/view/{category_id}', [CategoryController::class,'view'])->name('viewcat');
Route::post('/categories/updateCategory', [CategoryController::class,'updateCategory'])->name('updateCategory');
Route::get('/categories/deleteCategory/{category_id}', [CategoryController::class,'deleteCategory'])->name('delcat');