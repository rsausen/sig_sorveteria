<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controle_Horario extends Model
{
    //
    protected $table="controle_horario";
    protected $fillable=["funcionario_id","entrada","saida"];
    public function funcionario(){
    	return $this->belongsTo('App\Funcionario');
    }
}
