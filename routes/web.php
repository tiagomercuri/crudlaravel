<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', [\App\Http\Controllers\HelloWorldController::class,'index']);

Route::get('/products/{slug}', function($slug) {
    return $slug;
})->name('products.single');

Route::prefix('products')->name('products.')->group(function(){
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('create');
    Route::post('/save', [\App\Http\Controllers\ProductController::class, 'save'])->name('save');
});

Route::resource('/users', \App\Http\Controllers\UserController::class);

Route::prefix('admin')->group(function () {
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
});


