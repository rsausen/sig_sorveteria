<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $table="fornecedor";
    protected $fillable=["nome","cnpj","telefone","email","site","endereco","cidade_id"];
}
