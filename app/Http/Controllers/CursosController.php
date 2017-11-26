<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
        $areas = DB::table('areas')
                ->limit(3)
                ->get();
        $area_rows = [];
        foreach ($areas as $area) {
            $area_row = new \stdClass();
            $area_row-> area = $area->area;
            
            $cursos= DB::table('cursos')
                 ->where('area_id', '=', $area->id)
                ->limit(3)
                ->get();
            $area_row-> cursos = $cursos;
            array_push($area_rows,$area_row);
        }
        return view('cursos',['areas' => \App\Area::all(),'area_rows'=>$area_rows]);
    }
    public function showByArea($idArea)
    {
        return view('cursos');
    }
}
