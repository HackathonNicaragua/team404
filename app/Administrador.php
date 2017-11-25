<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table='administradors';
	protected $fillable= ['id', 'nombres', 'apellidos', 'telefono', 'direccion','foto','user_id'];
	protected $primarykey='id';
}
