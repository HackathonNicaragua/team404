<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Recurso;
use App\Area;
use App\User;
use App\Estudiante;
use Session;
use DB;
use Auth;
use Cache;

use Carbon\Carbon;

class RecursosController extends Controller
{

	public function index()
	{
		
		$recursos = Recurso::select('recursos.*','areas.*', 'recursos.nivel as nivels')
		->join('areas','areas.id','=','recursos.area_id')->orderBy('recursos.id', 'DESC')->paginate(1);;

		$areas=Area::orderBy('id', 'desc')->paginate(20);;
		return view ('recursos.index', ["recursos"=>$recursos, "areas"=>$areas]);
	}
	public function listar()
	{
		$recursos = Recurso::select('recursos.*','areas.*', 'recursos.nivel as nivels')
		->join('areas','areas.id','=','recursos.area_id')->orderBy('recursos.id', 'DESC')->get();;
		$areas=Area::select('areas.area')->orderBy('areas.area')->get();
		$id = Auth::id();
		$usuario = Estudiante::select('estudiantes.grado')
		->join('users','users.id','=','estudiantes.user_id')->where('users.id', '=', $id)->get();;
		// return $usuario;
		$recursos2 = Recurso::select('recursos.*','areas.*', 'recursos.nivel as nivels')
		->join('areas','areas.id','=','recursos.area_id')->orderBy('recursos.id', 'DESC')->get();;

		$capturar= array_merge($usuario->toarray(), $recursos2->toarray());
		$capturar2 = array_pluck($capturar, 'grado');
		$recursos2 = Recurso::select
		('recursos.*','areas.*', 'recursos.nivel as nivels')
		->join('areas','areas.id','=','recursos.area_id')
		->orderBy('recursos.id', 'DESC')
		->where('recursos.nivel', '=', $capturar[0])
		->get();;
		


		return view ('recursos.listado', ["recursos"=>$recursos,"recursos2"=>$recursos2, "areas"=>$areas, "usuario"=>$usuario]);

		
	}
	public function store(Request $request)
	{

		$recurso= new Recurso;
		$recurso->titulo=$request->get('titulo');
		$recurso->descripcion=$request->get('descripcion');
		$recurso->tipo=$request->get('tipo');
		$recurso->nivel=$request->get('nivel'); 
		$recurso->visitas='0';
		$recurso->area_id=$request->get('area_id');
		if (Input::hasFile('archivo')) {
			$file=Input::file('archivo');
			$file->move(public_path().'/archivos/recursos/', $file->getClientOriginalName());
			$recurso->archivo=$file->getClientOriginalName();

		}
		$recurso->save();

		return redirect('/recurso')->with('message' , 'Creado Correctamente');
	}
	public function update(Request $request, $id)
	{
		$recurso = Recurso::findOrFail($id);
		$recurso->titulo=$request->get('titulo');
		$recurso->descripcion=$request->get('descripcion');
		$recurso->tipo=$request->get('tipo'); 
		$recurso->nivel=$request->get('nivel'); 
		$recurso->area_id=$request->get('area_id');
		if (Input::hasFile('archivo')) 
			{
				$file=Input::file('archivo');
				$file->move(public_path().'/archivos/recursos/', $file->getClientOriginalName());
				$recurso->archivo=$file->getClientOriginalName();

			}
			// return $recurso;
			$recurso->update();

			return redirect('/recurso')->with('message' , 'Modificado Correctamente');
		}
	public function show($id)
	{
		$recursos = Recurso::select('recursos.*','areas.*', 'recursos.nivel as nivels')
		->join('areas','areas.id','=','recursos.area_id')
		->orderBy('recursos.id', 'DESC')
		->where('recursos.id','=',$id)
        ->first();

        $variable = Recurso::find($id);

        if(Cache::has($id)==false){
                // Cache::add($id,'contador',0.30);
            Cache::add($id,'contador',0.01);
            $variable->visitas++;
            $variable->save();
        }
        return view ('recursos.show', ['recursos'=>$recursos]);
	}

}
