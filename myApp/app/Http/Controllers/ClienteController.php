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
         //$nome = $request->input("nome", "");
         //dd($nome);
         //dd($values);
         $endereco = new Endereco($values);
         $endereco->logradouro = $request->input("endereco", "");
         //dd($endereco);

         try{

            $usuario->save(); //Salva o usuario
            $endereco->usuario_id = $usuario->id; //Relacionamento das tabelas
            $endereco->save(); //Salvar o endereco

         }catch(\Exception $e){

         }
        
         return redirect()->route("cadastrar");
        
    }
}
