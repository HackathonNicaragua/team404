@extends('layouts.main')

@section('contenido')
<div class="container" >
    <div class="row">
        <form class="col-md-12">
            <div class="row">
                <div class="input-field col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            Buscar por Categorias
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            @foreach ($areas as $area)
                            <li><a class="text-center text-gray" href="/cursos/area/{{ $area->id }}">{{$area->area}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="input-field col-md-10">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar en Educarte el curso que te gustaría recibir">
                        <span class="input-group-btn">
                            <button class="btn btn-success waves-effect waves-light" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @foreach ($area_rows as $area_row)
    <div class="row">
        <div class="col-md-12">
            <div class="card-panel">
                <div class="container">
                    <div class="row">
                        <div class="input-field col-md-10">
                            <h5 class="blue-grey-text">{{$area_row->area}}</h5>
                        </div>
                        <div class="input-field col-md-2">
                            <a class="text-right text-gray" href="/cursos/area/{{$area_row->id}}">ver todos...</a>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($area_row->cursos as $cursos)
                        <div class="input-field col-md-4">
                            <div class="card">
                                <div class="card-image">
                                    <div class="view overlay hm-white-slight z-depth-1">
                                        <img src="https://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">
                                        <a href="#">
                                            <div class="mask waves-effect"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h5>{{$cursos->titulo}}</h5>
                                </div>
                                <!--Buttons-->
                                <div class="card-btn text-center">
                                    <a href="#" class="btn btn-primary btn-md waves-effect waves-light">Read more</a>
                                    <a href="#" class="btn btn-default btn-md waves-effect waves-light">Buy now</a>
                                </div>
                                <!--/.Buttons-->
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
