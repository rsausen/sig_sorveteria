<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('item_nota', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->integer('nota_id')->unsigned();
            $table->foreign('nota_id')->references('id')->on('nota');
            $table->decimal('preco');
            $table->decimal('quantidade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
