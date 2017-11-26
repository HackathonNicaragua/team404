@extends('layouts.main')
@section('contenido')

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
							<img src="img/pdf.png" alt="" class="circle">
							@elseif ($rec->tipo=="Videos")
							<img src="img/video.png" alt="" class="circle">
							@elseif ($rec->tipo=="Imagenes")
							<img src="img/picture.png" alt="" class="circle">
							@else
							<img src="img/game.png" alt="" class="circle">
							@endif
							<a href="{{ route ('recurso.show',[$rec->id])}}">
								<span class="title" id="titulo"><b>{{$rec->titulo}}</b></span>
							</a>
							<br>
							<p id="descripcion">{{substr(strip_tags($rec->descripcion), 0,300)}}...</p>
							<br>
							<label for=""><b>Total visitas: {{$rec->visitas}}</b></label>
							<br>
							<a href="{{ route ('recurso.show',[$rec->id])}}">Leer mas</a>
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
							<img src="img/pdf.png" alt="" class="circle">
							@elseif ($re->tipo=="Videos")
							<img src="img/video.png" alt="" class="circle">
							@elseif ($re->tipo=="Imagenes")
							<img src="img/picture.png" alt="" class="circle">
							@else
							<img src="img/game.png" alt="" class="circle">
							@endif
							<a href="{{ route ('recurso.show',[$re->id])}}">
								<span class="title" id="titulo"><b>{{$re->titulo}}</b></span>
							</a>
							<br>
							<p id="descripcion">{{substr(strip_tags($re->descripcion), 0,300)}}...</p>
							<br>
							<label for=""><b>Total visitas: {{$re->visitas}}</b></label>
							<br>
							<a href="{{ route ('recurso.show',[$re->id])}}">Leer mas</a>
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
							<a href="{{ route ('recurso.show',[$to->id])}}">
								<span class="title" id="titulo"><b>{{$to->titulo}}</b></span>
							</a>
							<br>
							<p id="descripcion">{{substr(strip_tags($to->descripcion), 0,300)}}...</p>
							<br>
							<label for=""><b>Total visitas: {{$to->visitas}}</b></label>
							<br>
							<a href="{{ route ('recurso.show',[$to->id])}}">Leer mas</a>
							<!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card">
				<h6 align="center">Filtar información</h6>
				<hr>
				<h6 align="center" id="colo">Niveles</h6>
				<div id="radios">
					<div class="checkbox">
						<label><input type="checkbox" value="">Primaria</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="">Secundaria</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="">Curso técnico</label>
					</div>
				</div>
				<hr>
				<h6 align="center" id="colo">Áreas</h6>
				<div id="radios">
					@foreach ($areas as $a)
					<div class="checkbox">
						<label><input type="checkbox" value="{{$a->area}}">{{$a->area}}</label>
					</div>
					@endforeach
				</div>
			</div>			
		</div>
	</div>
	

	
</div>

@endsection