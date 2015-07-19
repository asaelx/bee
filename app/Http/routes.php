<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cajas-de-beneficios', function () {
    return view('info');
});

Route::get('catalogo', function () {
    return view('catalog');
});

Route::get('producto', function () {
    return view('product');
});

Route::get('carrito', function () {
    return view('cart');
});

Route::get('pago', function () {
    return view('checkout');
});
