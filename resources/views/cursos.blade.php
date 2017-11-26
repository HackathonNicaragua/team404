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
                        @foreach ($area_row->cursos as $curso)
                        <div class="card hoverable col-md-4" data-toggle="modal" data-target="#modal-{{$curso->id}}">
                            <div class="card-image">
                                <div class="view overlay hm-white-slight z-depth-1">
                                    <img src="https://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="card-content">
                                <h5>{{$curso->titulo}}</h5>
                            </div>
                            <!--Buttons-->
                            <div class="card-btn text-center row">
                                <div class="rating col-md-4 color-blue-dark">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <ul class="list-inline item-details col-md-4 color-blue-dark">
                                    <li>2h<i class="fa fa-clock-o"></i></li>
                                    <li>312<i class="fa fa-user-o"></i></li>
                                </ul>
                                <div class="col-md-4"> 
                                    <label style="font-size: large;" class="color-green-vibrant">Gratis</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="modal-{{$curso->id}}" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <div class="view overlay hm-white-slight z-depth-1">
                                            <img src="https://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <h4 class="modal-title">{{$curso->titulo}}</h4>
                                        <p>{{$curso->descripcion}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

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
