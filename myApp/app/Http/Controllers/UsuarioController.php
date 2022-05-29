<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    //
    public function logar(Request $request){
        $data = [];
   if($request->isMethod("POST")){
   //SE entrar neste IF, o usuário clickou no botão logar
    $login = $request->input("login");
    $senha = $request->input("senha");

    $credential = ['login' => $login, 'password' => $senha ];
   //logar
   if(Auth::attempt($credential)){
         return redirect()->route("home");   
    //dd("Usuariologado");

   }else{
       
    $request->session()->flash("err", "Usuario / senha invalido");
         return redirect()->route("logar");    
    //dd("Dados de usuário incorretos");
   }
}

        return view("logar", $data);
     }
}
