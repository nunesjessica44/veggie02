<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Produto;

class ProdutoController extends Controller
{
    Public function index(Request $request){
        $data = [];

        //buscar todos os produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;
        
        return view("home",$data);

    }
    Public function categoria(Request $request){
        $data = [];
        
        //SELECT * FROM categorias
        $listaCategorias = Categoria::all(); 

        //SELECT * FROM produtos limit 4
        $listaProdutos = Produtos::limit(4)->get();


        $data["lista"] = listaProdutos;
        $data["listaCategoria"] = listaCategorias;
        return view("categoria",$data);
        
    }
}
