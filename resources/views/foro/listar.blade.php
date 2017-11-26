@foreach($foro as $f)
	<h6>{{$f->name}}</h6>
	<h6>11vo grado Nexa</h6>
	<h6>Area:{{$f->tematica}}</h6>
	<p>Pregunta: {{$f->pregunta}}</p>

	@if(Auth::user()->name == $f->name)
		   <a href="#" data-toggle='modal' data-target='#editarPost'
                   Onclick='mostrarPublicacion({{$f->id}});'>Editar</a>
        
                <a id="elim" href="#" onclick="Eliminar('{{$f->id}}')">Elimnar
                     <i class="fa fa-trash" aria-hidden="true"></i>
                </a>

    @endif
    	<input type="button" id="btn-2" value="ocultar">
		<div id="contenido2">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam quod fugit adipisci, itaque, ab consequuntur praesentium cupiditate temporibus eius laboriosam saepe nobis nostrum sapiente expedita, atque aperiam repellendus incidunt.
		</div>
		
    	<i class="fa fa-clock-o" style="margin-left: 5px;">{{date('g:i a ', strtotime($f->created_at))}}</i>            
     	<a href="#" Onclick='foroid({{$f->id}});' data-toggle='modal' data-target='#modalComentario'>
                <i class="fa fa-comment-o" style="margin-left: 690px"></i>              
        </a>    
    
    <br>
    <hr>
@endforeach
