@foreach($foro as $f)
	<h6>{{$f->name}}</h6>
	<h6>Area Tematica:{{$f->tematica}}</h6>
	<p>Pregunta: {{$f->pregunta}}</p>

	@if(Auth::user()->name == $f->name)
		   <a href="#" data-toggle='modal' data-target='#editarPost'
                   Onclick='mostrarPublicacion({{$f->id}});'>  <span class="btn bt-comentario">Editar</span></a>
        
                <a id="elim" href="#" onclick="Eliminar('{{$f->id}}')"><span class="btn bt-comentario">Elimnar</span>
                     
                </a>

    @endif
    <input type="hidden" name="foro" value="{{$f->id}}" id="foroComent">
			<a Onclick='verComentario({{$f->id}});' data-toggle="collapse" href="#collapseExample{{$f->id}}"  aria-expanded="false" aria-controls="collapseExample"><span class="btn bt-comentario">ver comentarios</span>
              
            </a>
            <div class="collapse" id="collapseExample{{$f->id}}">
              <div class="well">
                <div id="comentarios"></div>
              </div>
            </div>
    	            
     	<a href="#"  data-toggle='modal' data-target='#modalComentario'>
                <i class="fa fa-comment-o" style="margin-left: 600px">comentar</i>              
        </a>    
    
    <br>
    <hr>
@endforeach
<script src="/js/comentarios.js"></script>