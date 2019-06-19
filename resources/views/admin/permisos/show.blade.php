@extends('layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Informacion Detallada del Alumno</h4>
					</div>
					<div class="card-body">
					<div class="col-md-4 pull-right" >
						<div class="img-responsive">
							<img width="150px" height="150" src="{{$alumno->file }}" alt="Foto del alumn">
						</div>
					</div>
					<p><strong>Nombre: </strong>	{{ $alumno->nombre}}</p>
					<p><strong>Apellido: </strong>	{{ $alumno->apellido}}</p>
					<p><strong>Lugar de Nac.: </strong>	{{ $alumno->lug_nac}}</p>
					<p><strong>Fecha de Nac.: </strong>	{{ Carbon\Carbon::parse($alumno->fec_nac)->format('d-m-Y') }}</p>
					<p><strong>Nacionalidad.: </strong>	{{ $alumno->nacionalidad}}</p>
					<p><strong>C.I.:</strong>	{{ $alumno->ci}}</p>
					<p><strong>Telefono: </strong>	{{ $alumno->telefono}}</p>
					<p><strong>Correo: </strong>	{{ $alumno->correo}}</p>
					<p><strong>Direccion: </strong>	{{ $alumno->direccion}}</p>
                    <p><strong>El alumno es de la sede:</strong>{{$alumno->sede->nombre}}</p>
                    @switch($alumno->estado)
                                    @case('cursando')
                                        <p><strong style="background-color:#ff026b;">El alumno es Estudiante Activo!</strong><p>
                                        
                                        @break
                                    
                                    @case('egreado')
                                        <p><strong style="background-color:#7801ff;"> El alumno ha Egresado!</strong><p>
                                        @break
                                    
                                    @default
                                        <p><strong>El alumno ha Egresado y también es Estudiante Activo!</strong><p>
                                    @endswitch
                    <hr>
					<p><strong>Creado por: </strong>	{{ $alumno->user->name}}</p>
					<p><strong>Fecha de creacion: </strong>	{{ $alumno->created_at->diffForHumans()}}</p>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection
