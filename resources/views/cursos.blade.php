@extends('layouts.main')

@section('contenido')
<div class="container">
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
                            <button class="btn btn-default" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @foreach ($area_rows as $area_row)
        {{$area_row->area}}
        @foreach ($area_row->cursos as $cursos)
            {{$cursos->titulo}}
            {{$cursos->descripcion}}
        @endforeach
    @endforeach
</div>
@endsection
