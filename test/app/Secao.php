<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secao extends Model
{
  protected $table = 'secao';
public $timestamps = false;
protected $fillable = array('titulo','idDisciplina');

}
