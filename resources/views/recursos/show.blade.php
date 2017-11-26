@extends('layouts.main')
@section('contenido')

<div class="container">
	<div class="row">

		<div class="col-lg-6">
			{{$recursos->titulo}}
		</div>
	</div>
</div>

@endsection

		<div class="col-lg-12" align="center">
			<h5>{{$recursos->titulo}}</h5>
		</div>
		<div class="col-lg-6">
			<p>{{$recursos->descripcion}}</p>
		</div>
		<div class="col-lg-6">
			<label for="">Nivel academico:</label><p>{{$recursos->nivel}}</p>
			<br>
			<label for="">Area:</label>
			<p>{{$recursos->area}}</p>
		</div>
		<div class="col-lg-8">
			@if ($recursos->tipo=="Documentos")
			<embed src="{{asset('archivos/recursos/'.$recursos->archivo)}}" type="application/pdf" width="100%" height="500"></embed>
			<div class="form-group" align="center">

				<a href="{{asset('archivos/recursos/'.$recursos->archivo)}}" download="{{$recursos->titulo}}">
					<button class="btn btn-env btn-rounded waves-effect waves-light" id="descargar"><i class="fa fa-download" id="icontesis" aria-hidden="true"></i>Descargar Archivo</button>
				</a>
				<a href="/archivos/recursos/{{$recursos->archivo}}">
					<button class="btn btn-env btn-rounded waves-effect waves-light"><i class="fa fa-eye" id="icontesis" aria-hidden="true"  target="_blank"></i>Visualizar Archivo</button>
				</a>
				<div class="alert alert-success alert-dismissible" id="message" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					"Archivo Descargado"
				</div>
			</div>
			@elseif ($recursos->tipo=="Videos")
			<video src="/archivos/recursos/{{$recursos->archivo}}" controls>
				Tu navegador no implementa el elemento <code>Video</code>.
			</video>
			@else ($recursos->tipo=="Imagenes")
			<img class="img-responsive" id="tesis" src="{{asset('archivos/recursos/'.$recursos->archivo)}}" alt="">
			@endif

		</div>
	</div>
</div>
@push ('scripts')
{!!Html::script('/js/tabla.js')!!}
<script type="text/javascript">
	$(document).ready(function(){
		$("#descargar").click(function(){
			$('#message').toggle(1000);
		});
	});
	$(document).ready(function(){
		$("#message").hide();
	});
</script>
@endpush
@endsection

