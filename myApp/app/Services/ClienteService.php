<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use log;

class ClienteService {

    public function SalvarUsuario(Usuario $user, Endereco $endereco){
        try{
            //Buscando um usurio com login que deve ser salvo
            $dbUsuario = Usuario:: where("login", $user->login)->first();
            if($dbUsuario){
                
                return ['status' => 'err', 'message' =>'Login ja cadastrado no seu sistema'];
            }
            \DB::beginTransaction(); //inicia a transação
            $usuario->save(); //Salva o usuario
            $endereco->usuario_id = $usuario->id; //Relacionamento das tabelas
            $endereco->save(); //Salvar o endereco
            \DB::commit(); //confirma a transação

            return ['status' => 'ok', 'message' =>'Usuario cadastrado com sucesso!'];
         }catch(\Exception $e){
            //tratar o erro
            \Log::error("ERRO", [ 'file'=> 'ClienteService.SalvarUsuario',
                                             'message' => $e->getMessage()]);
            \DB::rollback(); //retira alterações por ocorrer erro durante o processo
            return ['status' => 'err', 'message' =>'Não pode cadastrar um usuario'];
         }
    }

}