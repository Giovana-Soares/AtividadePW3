<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "tbcategoria";
    protected $fillable = ['idCategoria','Categoria']; //campos da tabela
    public $timestamps = false;
    //
}