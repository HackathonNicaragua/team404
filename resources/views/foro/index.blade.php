@extends('layouts.main')
@section('title','Foro')
@section('contenido')
	<div class="col-md-12">
			Tienes alguna pregunta? La comunidad educativa nicaraguense podria ayudarte a responderlas.
			<a style="margin-left: 880px; margin-top: -30px;" class="btn btn-env btn-rounded waves-effect success-color-dark" href="#" data-toggle='modal' data-target='#pregunta'>Agregar
	        </a>
	</div>
	<div class="col-md-8" style="border:1px solid lightgrey">
  				<div>
				  
				  	<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active">
					    	<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Destacado</a>
					    </li>
					    <li role="presentation">
					    	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reciente</a>
					    </li>
					    <li role="presentation">
					    	<a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Cercanas a Ti</a>
					    </li>
					    <li role="presentation">
					    	<a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">No atendidas</a>
					    </li>
				  	</ul>
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active listar-foros" id="home" >
					    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								
					    </div>
					    <div role="tabpanel" class="tab-pane" id="profile">...</div>
					    <div role="tabpanel" class="tab-pane" id="messages">fdd.</div>
					    <div role="tabpanel" class="tab-pane" id="settings">1123</div>
				    </div>

				   </div>
				</div>
	</div>				
	<div class="col-md-4">
		<div">
			<center><h6>Filtrar informacion</h6> </center>
			<hr style="border:1px solid lightgrey">
			<h6>Nivel</h6>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Option 1</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Option 1</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Option 1</label>
			</div>
			<h6>Area</h6>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Option 1</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Option 1</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Option 1</label>
			</div>
		</div>


	</div>
@include('foro.modalPregunta')
@include('foro.modalPreguntaEditar')
@include('comentarios.modalComentario')
@section('script')
<script src="js/foro.js"></script>
@endsection
@endsection