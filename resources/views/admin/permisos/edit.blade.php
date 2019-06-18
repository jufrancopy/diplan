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
						<h4 class="card-title ">Editar Materia</h4>
					</div>
					<div class="card-body">
						{!! Form::model($alumno, ['route'=>['us_alumnos.update', $alumno->id],
				        'method'=>'PUT', 'files'=>true])	!!}

					        @include('usuarios.alumnos.partials.form')

					{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection