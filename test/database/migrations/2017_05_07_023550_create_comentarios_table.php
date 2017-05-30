<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comentarios', function (Blueprint $table){
        $table->increments('id');
        $table->string('nome');
        $table->integer('post_id');
        $table->date('datacriacao');
        $table->time('hora');
        $table->string('conteudo');
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
