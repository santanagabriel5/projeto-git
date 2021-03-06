<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts', function (Blueprint $table){
        $table->increments('id');
        $table->string('titulo');
        $table->string('descricao');
        $table->date('datacriacao');
        $table->integer('idSecao');
        $table->boolean('tarefa');
        $table->date('data_entrega')->nullable();
        $table->time('hora_entrega')->nullable();
      });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
