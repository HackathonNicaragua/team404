@extends('layouts.main')
@section('contenido')
<link rel="stylesheet" href="{{asset('/css/input.css')}}">
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="col-md-9">
				<input type="text">
			</div>
			<div class="col-md-3">
				<button class="btn btn-env btn-rounded waves-effect waves-light"> Buscar</button>
			</div>
		</div>
		<div class="col-lg-9">
			<ul class="nav nav-tabs tabs-5">
				<li class="active"><a data-toggle="tab" href="#home" id="agregado">Agregado recientemente</a></li>
				@if (Auth::guest())
				@else 
				<li><a data-toggle="tab" href="#hom2">Recomendado</a></li>
				@endif
				<li><a data-toggle="tab" href="#menu5">Destacado</a></li>
			</ul>
		</div>
		<div class="col-lg-3"></div>
		<div class="col-lg-9">
			<div class="tab-content card-panel blue-grey lighten-5">
				<div id="home" class="tab-pane fade in active">
					<ul class="collection">
						@foreach ($recursos as $rec)						
						<li class="collection-item avatar">
							@if ($rec->tipo=="Documentos")
							<img src="/img/pdf.png" alt="" class="circle">
							@elseif ($rec->tipo=="Videos")
							<img src="/img/video.png" alt="" class="circle">
							@elseif ($rec->tipo=="Imagenes")
							<img src="/img/picture.png" alt="" class="circle">
							@else
							<img src="/img/game.png" alt="" class="circle">
							@endif
							<a href="{{ route ('recurso.show',[$rec->i])}}">
								<span class="title" id="titulo"><b>{{$rec->titulo}}</b></span>
							</a>
							<br>
							<p id="descripcion">{{substr(strip_tags($rec->descripcion), 0,300)}}...</p>
							<br>
							<label for=""><b>Área: {{$rec->area}}</b></label>
							<label for=""><b>Total visitas: {{$rec->visitas}}</b></label>
							<br>
							<br>
							<a href="{{ route ('recurso.show',[$rec->i])}}">Leer mas</a>
							<!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
						</li>
						@endforeach
					</ul>
				</div>
				@if (Auth::guest())
				@else 
				<div id="hom2" class="tab-pane fade">
					<ul class="collection">
						@foreach ($recursos2 as $re)						
						<li class="collection-item avatar">
							@if ($re->tipo=="Documentos")
							<img src="/img/pdf.png" alt="" class="circle">
							@elseif ($re->tipo=="Videos")
							<img src="/img/video.png" alt="" class="circle">
							@elseif ($re->tipo=="Imagenes")
							<img src="/img/picture.png" alt="" class="circle">
							@else
							<img src="/img/game.png" alt="" class="circle">
							@endif
							<a href="{{ route ('recurso.show',[$re->idd])}}">
								<span class="title" id="titulo"><b>{{$re->titulo}}</b></span>
							</a>
							<br>
							<p id="descripcion">{{substr(strip_tags($re->descripcion), 0,300)}}...</p>
							<br>
							<label for=""><b>Área: {{$re->area}}</b></label>
							<label for=""><b>Total visitas: {{$re->visitas}}</b></label>
							<br>
							<br>
							<a href="{{ route('recurso.show', $re->idd ) }}">Leer mas</a>
							<!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
						</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div id="menu5" class="tab-pane fade">
					<ul class="collection">
						@foreach ($top as $to)						
						<li class="collection-item avatar">
							@if ($to->tipo=="Documentos")
							<img src="img/pdf.png" alt="" class="circle">
							@elseif ($to->tipo=="Videos")
							<img src="img/video.png" alt="" class="circle">
							@elseif ($to->tipo=="Imagenes")
							<img src="img/picture.png" alt="" class="circle">
							@else
							<img src="img/game.png" alt="" class="circle">
							@endif
							<a href="{{ route ('recurso.show',[$to->iddd])}}">
								<span class="title" id="titulo"><b>{{$to->titulo}}</b></span>
							</a>
							<br>
							<p id="descripcion">{{substr(strip_tags($to->descripcion), 0,300)}}...</p>
							<br>
							<label for=""><b>Área: {{$to->area}}</b></label>
							<label for=""><b>Total visitas: {{$to->visitas}}</b></label>
							<br>
							<a href="{{ route ('recurso.show',[$to->iddd])}}">Leer mas</a>
							<!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<h6 align="center" id="colo">Filtar información</h6>
				<hr>
				<h6 align="center" id="colo">Niveles</h6>
				<div class="checkbox">
					<label style="font-size: 1.2em">
						<input type="checkbox" value="Primaria" id="uno">
						<span class="cr"><i class="cr-icon fa fa-check"></i></span>
						Primaria
					</label>
				</div>
				<div class="checkbox">
					<label style="font-size: 1.2em">
						<input type="checkbox" value="Secundaria" id="dos">
						<span class="cr"><i class="cr-icon fa fa-check"></i></span>
						Secundaria
					</label>
				</div>
				<div class="checkbox">
					<label style="font-size: 1.2em">
						<input type="checkbox" value="Cursos Tecnicos" id="tres">
						<span class="cr"><i class="cr-icon fa fa-check"></i></span>
						Cursos Tecnicos
					</label>
				</div>
			</div>
			<div class="card">
				<h6 align="center" id="colo">Áreas</h6>
				@foreach ($areas as $a)
				<div class="checkbox">
					<label style="font-size: 1.2em">
						<input type="checkbox" value="{{$a->area}}" id="area" name="area">
						<span class="cr"><i class="cr-icon fa fa-check"></i></span>
						{{$a->area}}
					</label>
				</div>
				@endforeach
			</div>	
			<!-- <div class="card">
				<button class="btn btn-env btn-rounded waves-effect waves-light"> Buscar</button>
			</div>	 -->
		</div>
		

	</div>
</div>



</div>
@push ('scripts')

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
<script type="text/javascript">
	$(document).ready(function(){
		$("#uno").click(function(){
			var check = $('#uno').prop('checked');

			if (check) {
				$('#dos').prop('disabled', true);
				$('#tres').prop('disabled', true);
			}
			else {
				$('#dos').prop('disabled', false);
				$('#tres').prop('disabled', false);
			}
			var area=$('#uno').val();
			var ruta='/filtro/'+ area;
			window.location.href=ruta;

			console.log(area);

		});
		$("#dos").click(function(){
			var check2 = $('#dos').prop('checked');
			
			if (check2) {
				$('#uno').prop('disabled', true);
				$('#tres').prop('disabled', true);
			}
			else {
				$('#uno').prop('disabled', false);
				$('#tres').prop('disabled', false);
			}
			var area2=$('#dos').val();
			var ruta2='/filtro/'+ area2;
			window.location.href=ruta2;
			console.log(area2);

		});
		$("#tres").click(function(){
			var check3 = $('#tres').prop('checked');
			
			if (check3) {
				$('#uno').prop('disabled', true);
				$('#dos').prop('disabled', true);
			}
			else {
				$('#uno').prop('disabled', false);
				$('#dos').prop('disabled', false);
			}
			var area3=$('#tres').val();
			var ruta3='/filtro/'+ area3;
			window.location.href=ruta3;
			console.log(area3);

		});
		$("#area").click(function () {	 
			alert($('input:checkbox[name=area]:checked').val());
			});
		 });
</script>
@endpush
@endsection