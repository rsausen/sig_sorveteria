<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ControleHorario extends Migration
{
    public function up()
    {
        //
        Schema::create('controle_horario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionario_id')->unsigned();
            $table->foreign('funcionario_id')->references('id')->on('funcionario');
            $table->string('entrada');
            $table->string('saida');
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
