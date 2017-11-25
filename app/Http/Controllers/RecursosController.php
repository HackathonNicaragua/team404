<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Recurso;
use Session;
use DB;
use Auth;
use Carbon\Carbon;

class RecursosController extends Controller
{

	public function index()
	{
		$recursos=Recurso::orderBy('id', 'desc')->paginate(1);;
		return view ('recursos.index', ["recursos"=>$recursos]);
	}
	public function listar()
	{
		return view ('recursos.listado');
	}
	public function store(Request $request)
	{

		$recurso= new Recurso;
		$recurso->titulo=$request->get('titulo');
		$recurso->descripcion=$request->get('descripcion');
		$recurso->tipo=$request->get('tipo'); 
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
		if (Input::hasFile('archivo')) 
			{
				$file=Input::file('archivo');
				$file->move(public_path().'/archivos/recursos/', $file->getClientOriginalName());
				$recurso->archivo=$file->getClientOriginalName();

			}
			$recurso->update();

			return redirect('/recurso')->with('message' , 'Modificado Correctamente');
		}

	}
