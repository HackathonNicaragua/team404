<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table='comentarios';
	protected $fillable= ['id', 'comentario','foro_id', 'user_id'];
	protected $primarykey='id';
}
