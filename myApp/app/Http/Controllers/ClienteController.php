<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use App\Services\ClienteService;

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
  
         $clienteService = new ClienteService();
        $result = $clienteService->salvarUsuario($usuario, $endereco);
        
        //dd($result);        

        $message = $result["message"];
        $status = $result["status"];
        
        //ok, Cadastro com sucesso
        //err, Usuario nao pode ser cadastrado 
        $request->session()->flash($status, $message);
        return redirect()->route("cadastrar");
        
    }
}
