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
                                            <h1>Análisis Interno</h1>
                                        </th>
                                        <th>
                                            <h1>Análisis Externo</h1>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th><div class="card text-center"><button type="button" class="btn btn-danger btn-lg"> DEBILIDAD</button></div></th>
                                        <th><div class="card text-center"><button type="button" class="btn btn-danger btn-lg"> AMENAZA</button></div></th>
                                    </tr>

                                    <tr>
                                        <th><div class="card text-center"><button type="button" class="btn btn-success btn-lg"> FORTALEZA</button></div></th>
                                        <th><div class="card text-center"><button type="button" class="btn btn-success btn-lg"> OPORTUNIDAD</button></div></th>
                                    </tr>
                                    

                                    
                                </thead>
                                <tbody>

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