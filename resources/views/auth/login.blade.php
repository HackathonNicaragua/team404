@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="row">
        <br><br><br><br><br>
        <div class="col-md-6 col-md-offset-3">
            
            <div class="panel panel-default">
                <br><br>
                <center>
                    <img src="img/logo/Isologo.png">
                    <h3>Iniciar sesión</h3>
                     <p style="color:#039be5;">Por favor ingrese sus correo y contraseña.</p>
                </center>
                <div class="panel-body">
                    <center>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <div class="col-md-12">
                                    <div class="input-field col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        <label for="email" data-error="wrong" data-success="right">Correo</label>
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
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <label for="password" data-error="wrong" data-success="right">Contraseña</label>
                                    </div>
                                
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{--  <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>  --}}

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary">
                                            Acceder
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-md-offset-3">
                                        <br>
                                        <a class="btn-link" href="{{ route('password.request') }}">
                                           Olvidó su contraseña?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
