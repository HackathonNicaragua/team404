<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\updateUserRequest;
use Auth;
use \Session;
use \App\User;
use \App\Maestro;
use DB;
use Image;


class MaestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/registrodoc');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perfil($id){
        
        $docente= DB::table('maestros')
          ->where('maestros.user_id', Auth::User()->id)
          ->select('maestros.*')
          ->get();

        return view('perfil/perfil')->with('docente',$docente);
        
    }
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
       //dd($request);


        if($request->hasFile('imagen'))
        {    
            $usuarios = new User();
            $usuarios->name=$request->nombres;
            $usuarios->email=$request->email;
            $usuarios->password=bcrypt($request->password);
            $usuarios->tipo="Docente";
       
            $imagen= $request->file('imagen');
            $filename= time(). '.'. $imagen->getClientOriginalExtension();
            Image::make($imagen)->resize(300,300)->save(public_path('img/User/'.$filename));
            $usuarios->imagen=$filename;
      
            $usuarios->save();

            $docente = new Maestro();
            $docente->nombres=$request->nombres;
            $docente->apellidos=$request->apellidos;
            $docente->telefono=$request->telefono;
            $docente->instituto=$request->colegio;
            $docente->docenteid=$request->iddoc;
    
            $docente->user_id=$usuarios->id;

            $docente->save();
            return redirect('/login');
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
    }
}
