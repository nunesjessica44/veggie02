<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    Public function index(Request $request){
        $data = [];

        //buscar todos os produtos
        $listaProdutos = \App\Models\Produto::all();
        $data["lista"] = $listaProdutos;
        
        return view("home",$data);

    }
    Public function categoria(Request $request){
        $data = [];
        
        return view("categoria",$data);
        
    }
}
