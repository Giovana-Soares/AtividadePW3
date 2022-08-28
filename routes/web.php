<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/categoria', function () {
    return view('categoria');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/produto', function () {
    return view('produto');
});