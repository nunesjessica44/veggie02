<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends RModel implements Authenticatable
{
    protected $table = "usuarios";
    protected $fillable = ['email', 'login', 'password', 'nome'];

    public function getAuthIdentifierName()
    {
        return $this->getKey();
    }
    public function getAuthIdentifier()
    {
        return $this->login;
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function getRememberToken()
    {
        
    }
    public function setRememberToken($value)
    {
        
    }
    public function getRememberTokenName()
    {
      
    }
    public function setLoginAttribute($login)
        /*
        Substitiu os traços por vazio, para recuperar no login
        */
        $value = preg_replace("/[^0-9]/", "", $login);
        $this->attributes["login"] = $value; 
    {

    }
}
