<div class="col-md-10 col-md-offset-1">
	<div class="modal fade" id="pregunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog " role="document">
					<div class="modal-content mod-yellow">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Agregar publicacion</h4>
							</div>

							<div class="modal-body">
								{{--creamos un alert--}}
								<div id="message-error" class="alert alert-danger danger" role="alert" style="display:none">
										<strong id="error"></strong>
								</div>
								{{--cremos el formulario con un id para usar ajax--}}
								{!!Form::open(['id'=>'form','file'=>true])!!}
									<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
									<input type="hidden" id="id">

									<div class="form-group">
		                        		{!!form::label('tematica','Tematica:')!!}
		                            	{!!form::text('tematica',null,['id'=>'tematica','class'=>'form-control','placeholder'=>'Escriba una tematica'])!!}
		          					</div>

		          					
		          					<div class="form-group">
		                        		{!!form::label('pregunta','Pregunta:')!!}
		                            	{!!form::text('pregunta',null,['id'=>'pregunta1','class'=>'form-control','placeholder'=>'Escriba su pregunta o duda'])!!}
		          					</div>

		                    		 <div class="form-group">
	                                       
	                                       {{--!!Form::label('area','Seleccione un area')!!}
	                                       {!!form::select('area',$area,null,['id'=>'area','class'=>'form-control'])!!--}}
	                                 </div>



		                		{!!Form::close()!!}
							</div>

							<div class="modal-footer">
								{!!link_to('#',$title ='Guardar',$attributes= ['id'=>'guardar','class'=>'btn btn-info'],$secure = null)!!}
							</div>
					</div>
				</div>
		</div>
</div>
