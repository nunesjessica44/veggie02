<?php

namespace App\Models;;

class Usuario extends RModel
{
    protected $table = "usuarios";
    protected $fillable = ['email', 'login', 'password', 'nome'];

}
