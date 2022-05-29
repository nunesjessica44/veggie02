<?php

namespace App\Models;

class Endereco extends RModel
{

    protected $table = "enderecos";
    protected $fillable = ['logradouro', 'complemento', 'numero', 'cep', 'cidade', 'estado'];

    public function setCepAttribute($cep){
        $value = preg_replace("/[^0-9]/", "", $cep);
        $this->attributes["cep"] = $value; 
        }
}
