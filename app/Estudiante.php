<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $table='estudiantes';
	protected $fillable= ['id', 'nombres', 'apellidos', 'grado', 'edad', 'genero', 'instituto','user_id'];
	protected $primarykey='id';
}
