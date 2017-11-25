@extends('panel.app')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="panel panel-default panel-table">
        <div class="panel-heading">
          <div class="row">
            <div class="col col-xs-6">
              <h3 class="panel-title">Listado de Precios de Recursos</h3>
            </div>
            <div class="col col-xs-6 text-right">
              <button type="button" class="btn btn-sm btn-primary btn-primary" data-target="#modal-create" data-toggle="modal">Agregar Nuevo</button>

            </a>
          </div>
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
                <th>Achivo</th>
             <!--  <th>Año</th>
              <th>Cantidad</th> -->
            </tr> 
          </thead>
          <tbody>

            <tr>

              <td align="center">
                <a class="btn btn-default" data-target="" data-toggle="modal"><em class="fa fa-pencil"></em></a>
                <a class="btn btn-primary" href=""><em class="fa fa-eye"></em></a>
              </td>



            </tr>
            @include("recursos.modal-edit")
            @include("recursos.modal-create")
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div></div></div>
@endsection