@extends('layouts.main')

@section('title')
    perfil
@endsection 

@section('contenido') 
    <div class="container">
        <div class="row">
            <br><br><br>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-3 toppad" >
       
       
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title"> {{ Auth::user()->name }}</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center">
                       <img alt="User Pic" src="../img/User/{{ Auth::user()->imagen }}" class="img-circle img-responsive">
                    </div>
                    
                   
                    <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>Nombres:</td>
                                    <td>{{$docente[0]->nombres}} </td>
                                </tr>
                                <tr>
                                    <td>Apellidos:</td>
                                    <td>{{$docente[0]->apellidos}}</td>
                                </tr>
                     
                                <tr>
                                    <tr>
                                        <td>Profesión</td>
                                        <td>{{ Auth::user()->tipo }}</td>
                                </tr>
                                <tr>
                                    <td>Instituto</td>
                                    <td>{{$docente[0]->instituto}}</td>
                                </tr>
                              <tr>
                                <td>Correo Electrónico</td>
                                <td>{{ Auth::user()->email }}</td>
                              </tr>
                                <td>Teléfono</td>
                                <td>{{$docente[0]->telefono}}</td>
                               
                              </tr>
                         
                            </tbody>
                          </table>
                      
                    </div>
                  </div>
                </div>
                    <div class="panel-footer">
                        
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary">Enviar <i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a class="btn btn-primary" Onclick='MostrarDatosAsp();' data-toggle='modal' data-target='#ModaldocEdit'>
                            <span>
                                Editar <i aria-hidden="true" class="fa fa-pencil-square-o"> </i>
                            </span>
                        </a>
                            
                        </span>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    
    
    @include('perfil/edit')
@endsection
