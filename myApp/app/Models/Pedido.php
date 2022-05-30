<?php

namespace App\Models;

class Pedido extends RModel
{
    protected $table = "pedidos";
    protected $fillable = ['dt_pedido','status','usuario_id'];
}
