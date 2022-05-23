<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function logar(Request $request){
        $data = [];
        return view("logar", $data);
     }
}
