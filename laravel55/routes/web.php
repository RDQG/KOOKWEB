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



Route::resource("/","HomeController");


Route::get('registrar', 'ClienteController@nuevoRegistro');
Route::get('login', 'ClienteController@formLogin');


Route::get('clientes/miscompras', "ClienteController@misCompras")->middleware('autenticado');



//llamadas a los formularios

Route::post('autenticar', [
    'as' => 'autenticar', 'uses' => 'ClienteController@autenticarCliente'
]);

Route::get('cerrarsesion', 'ClienteController@cerrarSesionCliente');


Route::resource("productos","ProductoController");
Route::resource("perfilcliente","ClienteController");

Route::resource("clientes","ClienteController");


Route::get('carrito/comprar/{idproducto}/{cantidad}', 'CarritoController@agregar_producto');


Route::get("carrito/limpiar_carrito","CarritoController@limpiar_carrito");