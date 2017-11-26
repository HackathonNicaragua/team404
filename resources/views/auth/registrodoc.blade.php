@extends('layouts.main')

@section('title')
    Registro docente
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br><br><br>
            <div class="panel panel-default z-depth-3">
                <br><br>
                <center>
                    <img src="img/logo/Isologo.png">
                    <h5 class="section-title h5-responsive">Registro de Docente</h5>
                    <p style="color:#039be5;">Por favor ingrese sus datos</p>
                </center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/registroDoc" file="true" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            <div class="col-md-6">
                                <br><br>
                                <center>
                                    <div class="form-group">
                                        <div class="file z-depth-3">
                                            <input type="file" id="addfoto" name="imagen" required>
                                            <output id="list"></output>
                                        </div>
                                    </div>
                                    Agregar Foto
                                </center>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-field col-md-12">
                                            <input id="iddoc" type="text" class="form-control" name="iddoc" required autofocus>
                                            <label for="iddoc" data-error="wrong" data-success="right">Código Docente</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    
                                    <div class="col-md-12">
                                        <div class="input-field col-md-12">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            <label for="email" data-error="wrong" data-success="right">Correo electrónico</label>
                                        </div>
                                        

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-12">
                                    
                                        <div class="input-field col-md-12">
                                            <input id="password" type="password" class="form-control" name="password" required autofocus>
                                            <label for="password" data-error="wrong" data-success="right">Contraseña</label>
                                        </div>


                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            
                            </div>

                           
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-field col-md-12">
                                            <input id="nombres" type="text" class="form-control" name="nombres" required autofocus>
                                            <label for="nombres" data-error="wrong" data-success="right">Nombres</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-field col-md-12">
                                            <input id="apellido" type="text" class="form-control" name="apellidos" required autofocus>
                                            <label for="apellido" data-error="wrong" data-success="right">apellidos</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-field col-md-12">
                                            <input id="telefono" type="text" class="form-control" name="telefono" required autofocus>
                                            <label for="telefono" data-error="wrong" data-success="right">Teléfono</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-field col-md-12">
                                            <input id="colegio" type="text" class="form-control" name="colegio" required autofocus>
                                            <label for="colegio" data-error="wrong" data-success="right">Instituto/colegio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 pull-right">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        Registrarse
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function archivo(evt) {
        var files = evt.target.files; // FileList object
            
        //Obtenemos la imagen del campo "file". 
        for (var i = 0, f; f = files[i]; i++) {         
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
                continue;
            }
            
            var reader = new FileReader();
                
            reader.onload = (function(theFile) {
                return function(e) {
                // Creamos la imagen.
                document.getElementById("list").innerHTML = ['<img class="img-precargada" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);
        
            reader.readAsDataURL(f);
        }
    }
                    
    document.getElementById('addfoto').addEventListener('change', archivo, false);
</script>

		
@endsection
