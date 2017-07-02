<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $table = 'posts';
public $timestamps = false;
protected $fillable = array('titulo',
'descricao','idSecao',"datacriacao", 'tarefa', 'data_entrega','hora_entrega');

}
