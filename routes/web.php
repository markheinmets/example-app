<?php

use App\Models\Order;
use App\Models\Tree;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trees', function(){
    return Tree::all();
});

Route::get('/orders/{order}', function(Order $order){
    return $order->load('client', 'book.authors');
});

