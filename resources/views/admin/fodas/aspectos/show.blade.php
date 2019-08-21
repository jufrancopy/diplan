@extends('layouts.usuarios.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" >
			<div class="panel panel-default">
				<div class="panel-heading">
					Ver Etiquestas
					
				</div>
			
				<div class="panel-body">
					<p><strong>ID</strong>	{{ $materia->id}}</p>
					<p><strong>Materia</strong>	{{ $materia->nombre}}</p>
					<p><strong>Id Curso</strong>	{{ $materia->curso_id}}</p>
					<p><strong>Id Profesor</strong>	{{ $materia->profesor_id}}</p>
			
					
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
