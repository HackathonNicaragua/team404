{{--Modal--}} 
<div class="modal fade" id="ModaldocEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document"> 
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span> 
				</button>
				<h4 class="modal-title" id="myModalLabel">Actualizar datos personales </h4> 
			</div>
			<div class="modal-body">
				<div class="col-sm-10 col-sm-offset-1"> 
				{{--creamos un alert--}}
				<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">  
					<strong id="error"></strong>
				</div>
				{{--cremos el formulario con un id para usar ajax--}}
				 <form class="form-horizontal" action="/actualizarDoc/" method="POST"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
					<div class="form-group"> 
                    <div class="col-md-12">
                       <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-field col-md-12">
                                    <input id="iddoc" type="text" class="form-control" name="iddoc" required autofocus>
                                    <label for="iddoc" data-error="wrong" data-success="right">Código Docente</label>
                                </div>
                            </div>
                        </div>  
                        
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    
                            <div class="col-md-12">
                                <div class="input-field col-md-12">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
                                    <label for="nombre" data-error="wrong" data-success="right">Nombres</label>
                                </div>
                                            
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    
                            <div class="col-md-12">
                                <div class="input-field col-md-12">
                                    <input id="apellidos" type="text" class="form-control" name="apellidos" value="" required autofocus>
                                    <label for="apellidos" data-error="wrong" data-success="right">Apellidos</label>
                                </div>
    
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    
                            <div class="col-md-12">
                                <div class="input-field col-md-12">
                                    <input id="telefono" type="text" class="form-control" name="telefono" value="" required autofocus>
                                    <label for="telefono" data-error="wrong" data-success="right">Teléfono</label>
                                </div>
                                            
    
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
				</div>
			</div>
			<div class="modal-footer">
                <button type="submit" name="Enviar" class="btn btn-agre">Actualizar
                </button>
				
			</div>
            </form>	

		</div>
	</div>
</div>