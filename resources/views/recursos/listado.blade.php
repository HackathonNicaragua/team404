@extends('layouts.main')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<ul class="nav nav-tabs tabs-5">
				<li class="active"><a data-toggle="tab" href="#home">Agregado recientemente</a></li>
				<li><a data-toggle="tab" href="#hom2">Recomendado</a></li>
				<li><a data-toggle="tab" href="#menu5">Destacado</a></li>
			</ul>
		</div>
		<div class="col-lg-6">
		</div>
		<div class="col-lg-9">
			<div class="tab-content card-panel blue-grey lighten-5">
				<div id="home" class="tab-pane fade in active">
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="img/prueba.jpg" alt="" class="circle">
							<span class="title">Title</span>
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
				<div id="hom2" class="tab-pane fade">
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="img/prueba.jpg" alt="" class="circle">
							<span class="title">Edwin</span>
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
				<div id="menu5" class="tab-pane fade">
					<ul class="collection">
						<li class="collection-item avatar">
							<img src="img/prueba.jpg" alt="" class="circle">
							<span class="title">Title</span>
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
	</div>
	

	
</div>

@endsection