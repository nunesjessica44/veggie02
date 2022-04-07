<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    Public function cadastrar(Request $request){
        $data = [];
        
        return view("cadastrar",$data);
        
    }
}
