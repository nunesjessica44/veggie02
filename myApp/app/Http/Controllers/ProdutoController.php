<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Services\VendaService;

class ProdutoController extends Controller
{
    Public function index(Request $request){
        $data = [];

        //buscar todos os produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;
        
        return view("home",$data);

    }
    Public function categoriaId($idcategoria, Request $request){
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
        $data["idcategoria"] = $idcategoria;
        return view("categoria",$data);
        
    }

    Public function categoria(Request $request){
        $idcategoria = 0;
        $data = [];
        
        //SELECT * FROM categorias
        $listaCategorias = Categoria::all(); 


        //SELECT * FROM produtos
        $queryProduto = Produto::query()->select();

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data["idcategoria"] = $idcategoria;
        return view("categoria",$data);
        
    }


    public function adicionarCarrinho($idProduto = 0, Request $request){
        //Buscar o produto pelo ID
          $prod = Produto::find($idProduto);
    
          if($prod){
         //Encontrou o produto
         // Buscar da sessão o carrinho atual
    
          $carrinho = session('cart', []);
          
          array_push($carrinho, $prod);
          session([ 'cart' => $carrinho ]);
         }
          return redirect()->route('home');
        } 
        public function verCarrinho(Request $request){
            $carrinho = session('cart', []);
            $data = [ 'cart' => $carrinho ];
            

            return view("carrinho", $data);
        }
        public function excluirCarrinho($indece, Request $request){
            $carrinho = session('cart',[]);
            if(isset($carrinho[$indece])){
                unset($carrinho[$indece]);
            }
            session(["cart" => $carrinho]);
            return redirect()->route("ver_carrinho");
        }
        public function finalizar (Request $request){
            $prods = session('cart',[]);

            $vendaService = new VendaService();
            $result = $vendaService->finalizarVenda($prods, \Auth::user());

            if($result["status"] == "ok"){
                $request->session()->forget("cart");
            }

            $request->session()->flash($result["status"], $result["message"]);

            return redirect()->route("ver_carrinho");
        }
}
