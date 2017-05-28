<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UploadTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('upload', function(Blueprint $table) {
        $table->increments('id');
        $table->string('nomeantigo');
        $table->string('novonome');
        $table->string('caminho');
        $table->integer('ligacao');
        $table->string('mime');

      });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('upload');

        //
    }
}
