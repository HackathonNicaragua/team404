<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-edit-{{$rec->id}}">
	{{Form::open(array('action'=>array('RecursosController@update', $rec->id), 'method'=>'put', 'files'=> 'true'))}}	
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
							<input type="text" name="titulo" required value="{{$rec->titulo}}" class="form-control" placeholder="Ingrese el Titulo">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="titulo">Descripcion</label>
							<input type="text" name="descripcion" required value="{{$rec->descripcion}}" class="form-control" placeholder="Ingrese la Direccion">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="titulo">Tipo</label>
							<select name="tipo" class="form-control selectpicker" data-live-search="true">
								<option value="{{$rec->tipo}}" selected="">{{$rec->tipo}}</option>
								<option value="Documentos">Documentos</option>
								<option value="Videos">Videos</option>
								<option value="Imagenes">Imagenes</option>
								<option value="Juegos">Juegos Educativos</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="titulo">Nivel</label>
							<select name="nivel" class="form-control selectpicker" data-live-search="true">
								<option value="{{$rec->nivel}}" selected="">{{$rec->nivel}}</option>
								<option value="Primaria">Primaria</option>
								<option value="Secundaria">Secundaria</option>
								<option value="Cursos Tecnicos">Cursos Tecnicos</option>
								<option value="Juegos">Juegos Educativos</option>
							</select>
						</div>
					</div>

					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label>Area</label>
							<select name="area_id" class="form-control selectpicker" data-live-search="true">
								@foreach ($areas as $a)
								@if($a->id==$rec->area_id)
								<option value="{{$a->id}}" selected>{{$a->area}}</option>
								@else
								<option value="{{$a->id}}">{{$a->area}}</option>
								@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
						<div class="form-group">
							<label for="foto">Logo</label>
							<!-- la propiedad required value="{{old('nombres')}}" validara de que si e archivo es muygrande mostrata el texto en la vista pero con la condicio de que no cumple con los caracteres -->
							<input type="file" name="archivo"  class="form-control">
							@if(($rec->archivo)!="")
							<img src="/archivos/recursos/{{$rec->archivo}}" height="200px" width="200px">
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