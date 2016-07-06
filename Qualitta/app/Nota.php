<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //
    protected $table="nota";
    protected $fillable=["item_id","total","data","fornecedor_id"];
}
