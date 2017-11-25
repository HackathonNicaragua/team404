<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
	protected $table='estudiantes';
	protected $fillable= ['id', 'nombres', 'apellidos', 'grado', 'edad', 'genero', 'instituto', 'foto','user_id'];
	protected $primarykey='id';
}
