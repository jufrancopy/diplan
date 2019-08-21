@extends('layouts.master')
@section('content')
<link href="http://www.japurahei.com/css/jqtree.css" rel="stylesheet">
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
    <script src="http://www.japurahei.com/recursos/tree/tree.jquery.js"></script>
    <script>
        var data = [
            @foreach($analisis->aspectos as $aspecto)
        {
            name: '{{$aspecto->nombre}}',
            children: [
                { name: '<a href="{{ route('foda-analisis.edit', $analisis->id) }}">Analizar</a>'},
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