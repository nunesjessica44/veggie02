<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
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
    Public function categoria($idcategoria = 0, Request $request){
        $data = [];
        
        //SELECT * FROM categorias
        $listaCategorias = Categoria::all(); 

        //SELECT * FROM produtos limit 4
        // $queryProduto = Produto::limit(4);

        //SELECT * FROM produtos
        $queryProduto = Produto::query()->select();

        if($idcategoria != 0){
            //WHERE categoria_id = $idcategoria
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        return view("categoria",$data);
        
    }
}
