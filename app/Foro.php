<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $table='foros';
	protected $fillable= ['id', 'tematica', 'imagen', 'pregunta', 'user_id', 'area_id'];
	protected $primarykey='id';
}
