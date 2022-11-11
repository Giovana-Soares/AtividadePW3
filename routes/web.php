<?php



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

Route::get('/graficos', function () {
    return view('graficos');
});

Route::get('/categoria','CategoriaController@index');
Route::get('/produto','ProdutoController@index');
Route::get('/pedido','PedidoController@index');
Route::get('/cliente','ClienteController@index');


Route::post('/produto/inserir','ProdutoController@store');
Route::post('/pedido/inserir','PedidoController@store');
Route::post('/categoria/inserir','CategoriaController@store');
Route::post('/cliente/inserir','ClienteController@store');

Route::get('/categoria/{id}','CategoriaController@destroy');
Route::get('/pedido/{id}','PedidoController@destroy');
Route::get('/produto/{id}','ProdutoController@destroy');
Route::get('/cliente/{id}','ClienteController@destroy');

Route::get('/cliente/{id}','ClienteController@show');

