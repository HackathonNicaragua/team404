<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foro;
use Auth;

class ForoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('foro.index');
    }

    public function listarPublicaciones()
    {
        $foro = Foro::orderBy('foros.id', 'DESC')
        ->join('users', 'users.id','foros.user_id')
        ->select('users.name','foros.pregunta','foros.tematica','foros.created_at','foros.id')->get();
        //dd($foro);
        return view('foro.listar')->with('foro',$foro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->ajax())
        {
                    $foro = new Foro();
                    $foro->user_id =  \Auth::user()->id;
                    $foro->tematica = $request->tematica; 
                    $foro->pregunta = $request->pregunta;
                    $foro->save();
                
                //si no hay error entonces
                if($foro){
                    //Session::flash('save','Se ha creado correctamente');
                    return response()->json(['success'=>'true']);
                }else{
                    return response()->json(['success'=>'false']);
                }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $foro = Foro::FindOrFail($id);
        return response()->json($foro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          if($request->ajax()){
                $foro = Foro::FindOrFail($id);
                $input = $request->all();
                $resultado = $foro->fill($input)->save();

                if($resultado){
                    return response()->json(['success'=>'true']);
                }else{
                    return response()->json(['success'=>'false']);
                }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $foro = Foro::FindOrFail($id);
                $resultado = $foro->delete();

                if($resultado)
                {
                    return response()->json(['success'=>'true']);
                }else
                {
                    return response()->json(['success'=>'false']);
                }
    }
}
