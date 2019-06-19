@extends('layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<section class="content-header">
					<ol class="breadcrumb ">
						<li><a href="{{route('us_alumnos.index')}}"><i class="material-icons">arrow_back</i>Volver atrás</a></li>
					</ol>
				</section>
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Ingresar Nuevo Alumno</h4>
					</div>
					<div class="card-body">
						{!! Form::open(['route' => 'us_alumnos.store','files'=>true]) !!}
						@include('usuarios.alumnos.partials.form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection