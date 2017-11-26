@extends('panel.app')
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
  <div class="row">
    <div class="col-md-10">

      <div class="panel panel-default panel-table">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-xs-6">
              <h3 class="panel-title">Listado de Precios de Recursos</h3>
            </div>
            <div class="col col-xs-6 text-right">
              <button type="button" class="btn btn-sm btn-primary btn-primary" data-target="#modal-create" data-toggle="modal">Agregar Nuevo</button>


            
          </div>
        </div>
        @include("recursos.modal-create")
      </div>
      <!-- buscador -->
    </div>
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-list table-hover" id="dev-table">
          <thead>
            <tr>
              <th><em class="fa fa-cog"></em></th>
              <!-- <th class="hidden-xs">ID</th> -->

              <!-- <th>ID</th> -->
              <th>Titulo</th>
              <th>Descripcion</th>
              <th>Tipo</th>
              <th>Area</th>
              <th>Nivel</th>
              <th>Achivo</th>
             <!--  <th>Año</th>
              <th>Cantidad</th> -->
            </tr> 
          </thead>
          <tbody>

            <tr>
              @foreach ($recursos as $rec)
              <td align="center">
                <a class="btn btn-default" href="" data-target="#modal-edit-{{$rec->id}}" data-toggle="modal"><em class="fa fa-pencil"></em></a>
                
                <a class="btn btn-primary" href=""><em class="fa fa-eye"></em></a>
              </td>
              <td>{{ $rec->titulo}}</td>
              <td>{{ $rec->descripcion}}</td>
              <td>{{ $rec->tipo}}</td>
              <td>{{ $rec->area}}</td>
              <td>{{ $rec->nivels}}</td>
              <td>
                <img src="{{asset('archivos/recursos/'.$rec->archivo)}}" alt="{{ $rec->titulo}}" height="100px" width="100px" class="img-thumbail">
              </td>
            </tr>
            @endforeach
            @include("recursos.modal-edit")
            
            
            
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div></div></div>
@endsection