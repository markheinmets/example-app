<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
use App\Models\Order;
use App\Models\Tree;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/trees', function(){
    return Tree::all();
});

Route::get('/orders/{order}', function(Order $order){
    return $order->load('client', 'book.authors');
});

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::resource('clients', ClientController::class);