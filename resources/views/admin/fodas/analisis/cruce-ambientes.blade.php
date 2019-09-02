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
                        <h4 class="card-title ">Cruce de Ambientes</h4>

                        <div class="pull-right">
                            <a class="btn btn-warning" href="{{ route('fodas-dashboard') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>
                                        Perfil: <label>{{$perfil->nombre}}</label>
                                        Contexto: <label>{{$perfil->contexto}}</label>
                                    </th>
                                    <th>Fortalezas
                                        <table class="table-responsive">
                                            <tr>
                                                @foreach($fortalezas as $v)
                                                <td><small>F{{ ++$i }}</small></td>
                                                <td><small>{{$v->aspecto->nombre}}</small><td>
                                            </tr>
                                        </table>
                                        @endforeach
                                    </th>
                                    <th>Debilidades
                                    <table class="table-responsive">
                                            <tr>
                                                @foreach($debilidades as $v)
                                                <td>D{{ ++$i }}</td>
                                                <td>{{$v->aspecto->nombre}}<td>
                                            </tr>
                                        </table>
                                        @endforeach
                                    </th>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td>Oportunidades 
                                            
                                                    @foreach($oportunidades as $v)
                                                    <td>F{{ ++$i }}</td>
                                                    <td>{{$v->aspecto->nombre}}<td>
                                              
                                            @endforeach
                                        </td>
                                        <td><button class="btn btn-success"><a href ="{{route('foda-cruce-ambientes.create')}}">Cruzar F-O</button> </td>
                                        <td><button class="btn btn-success"><a href ="{{route('foda-cruce-ambientes.create')}}">Cruzar D-O</button> </td>
                                    </tr>
                                    <tr>
                                        <td>Amenazas
                                            @foreach($oportunidades as $v)
                                                <td>F{{ ++$i }}</td>
                                                <td>{{$v->aspecto->nombre}}<td>
                                            @endforeach
                                        </td>
                                        <td><button class="btn btn-success"><a href ="{{route('foda-cruce-ambientes.create')}}">Cruzar F-A</button> </td>
                                        <td><button class="btn btn-success"><a href ="{{route('foda-cruce-ambientes.create')}}">Cruzar D-A</button> </td>
                                    </tr>
                                </tbody>
                                
                            </table>
                            <a href="{{ route('matriz-foda.pdf', $idPerfil) }}" class="btn btn-sm btn-info">
                                        Descargar Cruce de Ambientes en PDF
                            </a>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection