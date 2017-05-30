<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{

  protected $table = 'upload';
  public $timestamps = false;
  protected $fillable = array('nomeantigo','novonome','caminho','ligacao');

    //
}
