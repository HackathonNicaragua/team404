<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    public function showAll()
    {
        return view('cursos',['areas' => \App\Area::all()]);
    }
    public function showByArea($idArea)
    {
        return view('cursos');
    }
}
