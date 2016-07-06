<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'CIDADE';
    protected $fillable = ['codigo_cidade','nome','codigo_estado'];
}
