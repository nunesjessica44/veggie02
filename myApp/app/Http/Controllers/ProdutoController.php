<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;
use App\Services\VendaService;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Illuminate\Support\env;
use PagSeguro\Configuration\Configure;

class ProdutoController extends Controller
{
    private $_configs;

    public function __construct()
    {
        $this->_configs = new Configure();
        $this->_configs->setCharset("UTF-8");
        $this->_configs->setAccountCredentials(env('PAGSEGURO_EMAIL'), env('PAGSEGURO_TOKEN'));
        $this->_configs->setEnvironment(env("PAGSEGURO_AMBIENTE"));
        $this->_configs->setLog(true, storage_path('logs/pagseguro_' .date('Ymd') . '.log'));
    }

    public function getCredential(){
        return $this->_configs->getAccountCredentials();
    }




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
        public function historico(request $request){
            $data = [];
            //Pegar o id
                $idusuario = \Auth::user()->id;

                $listaPedido = Pedido::where("usuario_id", $idusuario)
                                    ->orderby("dt_pedido", "desc")
                                    ->get();      
$data["lista"] = $listaPedido;

            return view("compra/historico",$data);
        }
        public function detalhes(Request $request){
            $idpedido = $request->input("idpedido");
            $listaItens = ItensPedido::join("produtos", "produtos.id", "=", "itens_pedidos.produto_id")
                    ->where("pedido_id", $idpedido)
                    ->get(['itens_pedidos.*', 'itens_pedidos.valor as valoritem', 'produtos.*']);

            $data = [];
            $data["listaItens"] = $listaItens;
            return view("compra/detalhes", $data);
        }

        public function pagar(Request $request){
            $data = [];

              $carrinho = session('cart', []);
              $data ['cart'] = $carrinho;
              $sessionCode = \PagSeguro\Services\Session::create(
                $this->getCredential()
              );
              $IDSession = $sessionCode->getResult();
              $data["sessionID"] = $IDSession;

            return view("compra/pagar", $data);
        }
}
