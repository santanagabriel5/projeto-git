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
        $table->string('nomearquivo');
        $table->string('mime');
        $table->string('original_filename');
        $table->timestamps();
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
