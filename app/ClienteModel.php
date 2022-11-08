<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{  
    protected $table = "tbcliente";
    protected $fillable = ['idCliente','Nome', 'DtNasc','EstadoCivil', 'Cep', 'Rua', 'Numero', 'Complemento', 'Bairro', 'Cidade', 'Estado',  'Rg', 'Cpf', 'Email' , 'Fone','Celular']; //campos da tabela
    public $timestamps = false;
    //
}