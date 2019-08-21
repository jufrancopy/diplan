@extends('layouts.master') @section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Seleccionar Aspectos a Analizar</b>
                            <div class="pull-right">
                                <a class="btn btn-warning pull-right" href="{{ route('roles.index') }}"> Atras</a>
                            </div>
                    </div>

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="card-body">
                        {!! Form::open(array('route' => 'foda-analisis.store','method'=>'POST')) !!}
                        <div class="content">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{ Form::hidden('user_id', auth()->user()->id) }}
                                    {{ Form::hidden('perfil_id', $idPerfil) }}
                                    {{ Form::hidden('tipo', 'Pendiente') }}
                                    <strong>Listado de Aspectos:</strong>
                                    <br /> @foreach($aspectos as $value)
                                    <label>{{ Form::checkbox('aspecto_id[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->nombre }}</label>
                                    <br /> @endforeach
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Analizar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection