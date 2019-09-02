@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Matriz</h4>

                        <div class="pull-right">
                            <a class="btn btn-warning" href="{{ route('fodas-dashboard') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <h3>Análisis Interno</h3>
                                        </th>
                                        <th>
                                            <h3>Análisis Externo</h3>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="card text-center"><button type="button" class="btn btn-danger btn-lg"> DEBILIDAD</button></div>
                                            <table>
                                                <tr>
                                                @foreach($debilidades as $v)
                                                    <td>{{$v->aspecto->nombre}}</td>
                                                    @switch($v->tipo)
                                                        @case('Fortaleza')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break

                                                        @case('Oportunidad')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Debilidad')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Amenaza')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @default 
                                                            <td><p class="badge badge-default">Pendiente</p></td>
                                                    @endswitch
                                                </tr>
                                                @endforeach
                                            </table>
                                        </th>
                                        <th><div class="card text-center"><button type="button" class="btn btn-danger btn-lg"> AMENAZA</button></div>
                                        <table>
                                                <tr>
                                                @foreach($amenazas as $v)
                                                    <td>{{$v->aspecto->nombre}}</td>
                                                    @switch($v->tipo)
                                                        @case('Fortaleza')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break

                                                        @case('Oportunidad')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Debilidad')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Amenaza')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @default 
                                                            <td><p class="badge badge-default">Pendiente</p></td>
                                                    @endswitch
                                                </tr>
                                                @endforeach
                                            </table>
                                        </th>
                                    </tr>
                                        

                                    <tr>
                                        <th>
                                            <div class="card text-center"><button type="button" class="btn btn-success btn-lg"> FORTALEZA</button></div>
                                            <table>
                                                <tr>
                                                @foreach($fortalezas as $v)
                                                    <td>{{$v->aspecto->nombre}}</td>
                                                    @switch($v->tipo)
                                                        @case('Fortaleza')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break

                                                        @case('Oportunidad')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Debilidad')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Amenaza')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @default 
                                                            <td><p class="badge badge-default">Pendiente</p></td>
                                                    @endswitch
                                                </tr>
                                                @endforeach
                                            </table>
                                        </th>
                                        <th>
                                            <div class="card text-center"><button type="button" class="btn btn-success btn-lg"> OPORTUNIDAD</button></div>
                                            <table>
                                                <tr>
                                                @foreach($oportunidades as $v)
                                                    <td>{{$v->aspecto->nombre}}</td>
                                                    @switch($v->tipo)
                                                        @case('Fortaleza')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break

                                                        @case('Oportunidad')
                                                            <td><p class="badge badge-success">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Debilidad')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @case('Amenaza')
                                                            <td><p class="badge badge-danger">{{$v->tipo}}</p></td>
                                                        @break
                                                        @default 
                                                            <td><p class="badge badge-default">Pendiente</p></td>
                                                    @endswitch
                                                </tr>
                                                @endforeach
                                            </table>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <a href="{{ route('matriz-foda.pdf', $idPerfil) }}" class="btn btn-sm btn-primary">
                            Descargar Matriz en PDF
                                </a>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection