<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

class ClienteController extends Controller
{
    Public function cadastrar(Request $request){
        $data = [];
        
        return view("cadastrar",$data);
        
    }

    Public function cadastrarCliente(Request $request){
        //Pegar todos os valores do formulário
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input("cpf", "");

        $senha= $request->input("password", "");
        $usuario->password = \Hash::make($senha); //criptografar senha
         //$nome = $request->input("nome", "");
         //dd($nome);
         //dd($values);
         $endereco = new Endereco($values);
         $endereco->logradouro = $request->input("endereco", "");
         //dd($endereco);

         try{
            \DB::beginTransaction(); //inicia a transação
            $usuario->save(); //Salva o usuario
            $endereco->usuario_id = $usuario->id; //Relacionamento das tabelas
            $endereco->save(); //Salvar o endereco
            \DB::commit(); //confirma a transação
         }catch(\Exception $e){
            //tratar o erro
            \DB::rollback(); //retira alterações por ocorrer erro durante o processo
 
         }
        
        return redirect()->route("cadastrar");
        
    }
}
