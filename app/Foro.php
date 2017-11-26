<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $table='foros';
	protected $fillable= ['id', 'tematica', 'pregunta', 'user_id'];
	protected $primarykey='id';
}
