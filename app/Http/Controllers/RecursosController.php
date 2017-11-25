<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursosController extends Controller
{
    public function listar()
    {
    	return view ('recursos.listado');
    }
    public function index()
    {
    	return view ('recursos.index');
    }
}
