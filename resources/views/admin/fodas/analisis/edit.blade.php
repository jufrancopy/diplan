@extends('layouts.master')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title ">Analizar</h4>
          </div>
          <div class="card-body">
            {!! Form::model($analisis, ['route'=>['foda-analisis.update', $analisis->id],
            'method'=>'PUT']) !!}


            @include('admin.fodas.analisis.partials.form')

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection