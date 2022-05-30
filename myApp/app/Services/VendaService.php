<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Log;

class VendaService {

    public function finalizarVenda($prods = [], Usuario $user ){
        try{
            \DB::beginTransaction(); //inicia a transação
            $dtHoje = new \DateTime();
            $pedido = new Pedido();

            $pedido -> dt_pedido = $dtHoje->format("y-m-d H:i:s");
            $pedido -> status = "PEN";
            $pedido -> usuario_id = $user -> id;

            $pedido->save();

            foreach ($prods as $p) {
                $itens = new ItensPedido();

                $itens -> quantidade = 1;
                $itens -> valor = $p->valor;
                $itens -> dt_item = $dtHoje->format("y-m-d H:i:s");
                $itens -> produto_id = $p->id;
                $itens -> pedido_id = $pedido->id;

                $itens->save();

            }

            \DB::commit(); //confirma a transação

            return ['status' => 'ok', 'message' =>'Venda finalizada com sucesso'];

        }catch(\Exeption $e){
            \DB::rollback(); //retira alterações por ocorrer erro durante o processo
            Log::error("ERRO VENDA SERVICE", ['message' -> $e->getMessage()]);
            return ['status' => 'err', 'message' =>'Venda não pode ser finalizada'];
        }
    }
}

?>