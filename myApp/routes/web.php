<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
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

Route::match(['get','post'],'/', [ProdutoController::class,'index'])->name('home');
Route::match(['get','post'],'/categoria', [ProdutoController::class,'categoria'])
        ->name('categoria');

Route::match(['get','post'],'/{idcategoria}/categoria', [ProdutoController::class,'categoria'])
        ->name('categoria_por_id');

Route::match(['get','post'],'/cadastrar', [ClienteController::class,'cadastrar'])
        ->name('cadastrar');


Route::match(['get','post'],'/{idproduto}/carrinho/adicionar', [ProdutoController::class,'adicionarCarrinho'])
        ->name('adicionar_carrinho');

Route::match(['get','post'],'/carrinho', [ProdutoController::class,'verCarrinho'])
        ->name('ver_carrinho');

 Route::match(['get','post'],'/{indice}/excluircarrinho', [ProdutoController::class,'excluirCarrinho'])
        ->name('carrinho_excluir');