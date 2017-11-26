<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{
    protected $table='recursos';
	protected $fillable= ['id', 'titulo','descripcion', 'archivo', 'tipo','nivel', 'area_id', 'visitas'];
	protected $primarykey='id';
}
