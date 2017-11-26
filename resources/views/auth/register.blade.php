@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <br>
            <div class="panel panel-default">
                <br><br>
                <center>
                    <img src="img/logo/Isologo.png">
                    <h3>Registro de usuario</h3>
                     <p style="color:#039be5;">Por favor ingrese sus datos</p>
                </center>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-field col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                    <label for="name" data-error="wrong" data-success="right">Usuario</label>
                                </div>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="col-md-6 col-md-offset-3">
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
                           
                            <div class="col-md-6 col-md-offset-3">
                            
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="input-field col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus>
                                <label for="password-confirm" data-error="wrong" data-success="right">Confirmar contraseña</label>
                            </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
@endsection
