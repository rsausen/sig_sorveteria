<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'ESTADO';
    protected $fillable = ['codigo_estado','nome','sigla'];
}
