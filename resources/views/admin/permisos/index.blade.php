@extends('layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Panel de Alumnos</h4>
						<a href="{{route('us_alumnos.create')}}" class="btn btn-sm btn-success">crear</a>
					</div>
					
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<!-- AquiBuscador -->
								<div class="float-right">
									{!! Form::open(['route' => 'us_alumnos.index','method' => 'GET', 'class'=>'navbar-form navbar-left pull-right','role'=>'search']) !!}
									<div class="form-group">
										{!! Form::text('ci',null, ['class'=>'form-control','placeholder'=>'Ingrese CI Nro']) !!}
									</div>
									
									<button type="submit" class="btn btn-default pull-right">Buscar</button>
									
								</div>
								
								{!!Form::close()!!}
								<!-- Fin Buscador -->
								<thead>
									<tr>
										<th>Apellido</th>
										<th>Nombre</th>
										<th>CI Nro</th>
										<th>Teléfono</th>
										<th>Correo</th>
										<th>Dirección</th>
										
										<th>Foto</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($alumnos as $alumno)
									<tr>
										<td>{{$alumno->apellido}}</td>
										<td>{{$alumno->nombre}}</td>
										<td>{{$alumno->ci}}</td>
										<td>{{$alumno->telefono}}</td>
										<td>{{$alumno->correo}}</td>
										<td>{{$alumno->direccion}}</td>
										
										<td><img width="50px" height="50px" src="{{$alumno->file }}" alt="Foto del Alumno"></td>
										<td width="5px">
											<a href="{{route('us_alumnos.show', $alumno->id)}}"
												class="btn btn-sm btn-default">
												ver
											</a>
										</td>
										<td width="5px">
											<a href="{{route('us_alumnos.edit',$alumno->id)}}"
												class="btn btn-sm btn-default">
												editar
											</a>
										</td>
										<td width="5px">
											{!! Form::open(['route' => ['us_alumnos.destroy', $alumno->id], 'method' => 'DELETE']) !!}
											<button class="btn btn-sm btn-danger" onclick="return confirm('Estas seguro de eliminar a {{$alumno->nombre}} {{$alumno->apellido}}. Si lo eliminas también eliminarás los datos asociados a el.')">
											Eliminar
											</button>
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer" style="text-align: center;">
						{{$alumnos->render()}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection