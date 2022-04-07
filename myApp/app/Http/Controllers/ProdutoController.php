<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    Public function index(Request $request){
        $data = [];
        
        return view("home",$data);

    }
    Public function categoria(Request $request){
        $data = [];
        
        return view("categoria",$data);
        
    }
}
