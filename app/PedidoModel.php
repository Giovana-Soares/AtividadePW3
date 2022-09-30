<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbpedido";
    protected $fillable = ['idPedido','data','idCliente','idProduto','estado']; //campos da tabela
    public $timestamps = false;
    //
}