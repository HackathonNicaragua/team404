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
    	<a  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		  ver comentarios
		</a>
		
		<div class="collapse" id="collapseExample">
		  <div class="well">
		    ...
		  </div>
		</div>
    	<i class="fa fa-clock-o" style="margin-left: 5px;">{{date('g:i a ', strtotime($f->created_at))}}</i>            
     	<a href="#" Onclick='foroid({{$f->id}});' data-toggle='modal' data-target='#modalComentario'>
                <i class="fa fa-comment-o" style="margin-left: 690px"></i>              
        </a>

        
</span>     
    
    <br>
    <hr>
@endforeach
