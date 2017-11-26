@extends('layouts.main')
@section('contenido')
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
							<img src="img/pdf.png" alt="" class="circle">
							@elseif ($rec->tipo=="Videos")
							<img src="img/video.png" alt="" class="circle">
							@elseif ($rec->tipo=="Imagenes")
							<img src="img/picture.png" alt="" class="circle">
							@else
							<img src="img/game.png" alt="" class="circle">
							@endif
							<span class="title" id="titulo"><b>{{$rec->titulo}}</b></span>
							<br>
							<p id="descripcion">{{$rec->descripcion}}.</p>
							<br>
							<a href="">Leer mas</a>
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
							<span class="title" id="titulo"><b>{{$re->titulo}}</b></span>
							<br>
							<p id="descripcion">{{$re->descripcion}}.</p>
							<br>
							<a href="">Leer mas</a>
							<!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
						</li>
						@endforeach
					</ul>
				</div>
				@endif
				
				<div id="menu5" class="tab-pane fade">
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="img/prueba.jpg" alt="" class="circle">
							<span class="title">Tsdfsditle</span>
							<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo adipisci odio recusandae iusto! Amet nostrum, ab dicta unde architecto accusantium ratione autem corporis vitae quas voluptates blanditiis omnis laborum assumenda.</p>
							<br>
							<a href="">Leer mas</a>
							<!-- <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> -->
						</li>
						<br>
						<li class="collection-item avatar">
							<i class="material-icons circle">folder</i>
							<span class="title">Title</span>
							<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo adipisci odio recusandae iusto! Amet nostrum, ab dicta unde architecto accusantium ratione autem corporis vitae quas voluptates blanditiis omnis laborum assumenda.</p>
							<br>
							<a href="">Leer mas</a>
						</li>
						<br>
						<li class="collection-item avatar">
							<i class="material-icons circle green">insert_chart</i>
							<span class="title">Title</span>
							<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo adipisci odio recusandae iusto! Amet nostrum, ab dicta unde architecto accusantium ratione autem corporis vitae quas voluptates blanditiis omnis laborum assumenda.</p>
							<br>
							<a href="">Leer mas</a>
						</li>
						<br>
						<li class="collection-item avatar">
							<i class="material-icons circle red">play_arrow</i>
							<span class="title">Title</span>
							<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo adipisci odio recusandae iusto! Amet nostrum, ab dicta unde architecto accusantium ratione autem corporis vitae quas voluptates blanditiis omnis laborum assumenda.</p>
							<br>
							<a href="">Leer mas</a>
						</li>
						<br>
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