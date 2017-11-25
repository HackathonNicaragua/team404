<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCurso extends Model
{
    protected $table='detalle_cursos';
	protected $fillable= ['id', 'curso_id','user_id'];
	protected $primarykey='id';
}
