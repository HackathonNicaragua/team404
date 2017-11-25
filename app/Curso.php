<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='cursos';
	protected $fillable= ['id', 'titulo', 'descripcion', 'area_id'];
	protected $primarykey='id';
}
