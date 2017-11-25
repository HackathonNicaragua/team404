<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $table='contenidos';
	protected $fillable= ['id', 'titulo', 'descripcion' ,'archivo','curso_id'];
	protected $primarykey='id';
}
