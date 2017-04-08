<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
  protected $table = 'disciplina';
public $timestamps = false;
protected $fillable = array('titulo',
'cargah','codProfessor' ,'inicio','fim');

}
