<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-edit-{{$r->id}}">
	{{Form::open(array('action'=>array('RecursosController@update', $r->id), 'method'=>'put', 'files'=> 'true'))}}	

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
					
				</button>
				<h4 class="modal-title">Editar Recurso</h4>
			</div>
			<div class="modal-body">
				{{Form::token()}}
				<div class="row">			
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="titulo">Titulo</label>
							<input type="text" name="titulo" required value="{{$r->titulo}}" class="form-control" placeholder="Ingrese el Titulo">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="titulo">Descripcion</label>
							<input type="text" name="descripcion" required value="{{$r->descripcion}}" class="form-control" placeholder="Ingrese la Descripcion">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="titulo">Tipo</label>
							<select name="tipo" class="form-control">
								@if ($r->tipo=='Documentos')
								<option value="{{$r->tipo}}" selected="">Documentos</option>
								<option value="Videos">Videos</option>
								<option value="Imagenes">Imagenes</option>
								<option value="Juegos">Juegos Educativos</option>
								@elseif ($r->tipo=='Videos')
								<option value="{{$r->tipo}}" selected="">Videos</option>
								<option value="Imagenes">Imagenes</option>
								<option value="Juegos">Juegos Educativos</option>
								<option value="Documentos">Documentos</option>
								@else
								<option value="{{$r->tipo}}" selected="">Imagenes</option>
								<option value="Videos">Videos</option>
								<option value="Juegos">Juegos Educativos</option>
								<option value="Documentos">Documentos</option>
								@endif
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="foto">Archivo</label>
							<!-- la propiedad required value="{{old('nombres')}}" validara de que si e archivo es muygrande mostrata el texto en la vista pero con la condicio de que no cumple con los caracteres -->
							<input type="file" name="logo"  class="form-control">
							@if(($r->archivo)!="")
							<img src="/archivos/recursos/{{$r->archivo}}" height="200px" width="200px">
							@endif
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</div>

		{{Form::close()}}
	</div>