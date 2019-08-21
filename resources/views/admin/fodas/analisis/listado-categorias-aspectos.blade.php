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
                        <h4 class="card-title ">Perfiles</h4>
                       
                        <div class="pull-right">
                            <a class="btn btn-warning" href="{{ route('fodas-dashboard') }}"> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                    <p id="tree1"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @section('scripts')
    <script>
        var data = [
            @foreach($analisis->aspectos as $aspecto)
        {
            name: '<table><tr><td>{{$aspecto->nombre}}</td>@switch($analisis->tipo)@case('Fortaleza')<td class="badge badge-success">Fortaleza</td>@break @case('Oportunidad')<td class="badge badge-info">Oportunidad</td>@break @case('Debilidad')<td class="badge badge-danger">Debilidad</td> @break @case('Amenaza') <td class="badge badge-warning">Amenaza</td> @break @default <td>Pendiente</td>@endswitch</tr></table>',
            children: [
                { name: '<table><tr><td><a href="{{ route('foda-analisis.edit', $analisis->id) }}">Analizar</a></td>@switch($analisis->tipo)@case('Fortaleza')<td class="badge badge-success">Fortaleza</td>@break @case('Oportunidad')<td class="badge badge-info">Oportunidad</td>@break @case('Debilidad')<td class="badge badge-danger">Debilidad</td> @break @case('Amenaza') <td class="badge badge-warning">Amenaza</td> @break @default <td>Pendiente</td>@endswitch</tr></table>'},
            ]
        },
        @endforeach   
    ];

    $('#tree1').tree({
        data: data,
        autoEscape: false,
        saveState: true,
        closedIcon: $('<i class="fas fa-arrow-circle-right"></i>'),
        openedIcon: $('<i class="fas fa-arrow-circle-down"></i>'),
        autoOpen: true,
        openFolderDelay: 1000,
        dragAndDrop: true
    });
    </script>
    @endsection
@endsection