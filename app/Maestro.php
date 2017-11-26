<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $table='maestros';
	protected $fillable= ['id', 'nombres', 'apellidos', 'telefono', 'instituto','foto','user_id'];
	protected $primarykey='id';
}
