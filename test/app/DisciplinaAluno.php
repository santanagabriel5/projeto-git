<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisciplinaAluno extends Model
{
  //IdDisciplina INT || IdAluno INT ||Acesso BOOLEAN
  protected $table = 'disciplinaaluno';
public $timestamps = false;

protected $fillable = array('Id','IdDisciplina',
'IdAluno','Acesso');

}
