<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class comentarios extends Model
{
    protected $table = 'comentarios';
    public $timestamps = false;
    protected $fillable = array('nome','comentario');
}
?>
