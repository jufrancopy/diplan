{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
	{{	Form::label('estado', 'Estado del Alumno')	}}
	{{	Form::select('estado', array('cursando' => 'Estudiante', 'egresado' => 'Egresado'), NULL, array('class' => 'form-control')) }}
</div>

<div class="form-group">
	{{	Form::label('nombre', 'Nombre:')	}}
	{{	Form::text('nombre', null,['class'=>'form-control','id'=>'nombre'])	}}
</div>

<div class="form-group">
	{{	Form::label('apellido', 'Apellido:')	}}
	{{	Form::text('apellido', null,['class'=>'form-control','id'=>'apellido'])	}}
</div>

<div class="form-group">
	{{	Form::label('fec_nac', 'Fecha de Nac.:')	}}
	
	{{	Form::date('fec_nac', null,['class'=>'form-control','id'=>'fec_nac'])	}}
</div>

<div class="form-group">
	{{	Form::label('lug_nac', 'Lugar de Nac.:')	}}
	{{	Form::text('lug_nac', null,['class'=>'form-control','id'=>'lug_nac'])	}}
</div>

<div class="form-group">
	{{	Form::label('nacionalidad', 'Nacionalidad.:')	}}
	{{	Form::text('nacionalidad', null,['class'=>'form-control','id'=>'nacionalidad'])	}}
</div>

<div class="form-group">
	{{	Form::label('ci', 'Cedula de Identidad.:')	}}
	{{	Form::text('ci', null,['class'=>'form-control','id'=>'ci'])	}}
</div>

<div class="form-group">
	{{	Form::label('telefono', 'Teléfono.:')	}}
	{{	Form::text('telefono', null,['class'=>'form-control','id'=>'telefono'])	}}
</div>

<div class="form-group">
	{{	Form::label('correo', 'Correo.:')	}}
	{{	Form::text('correo', null,['class'=>'form-control','id'=>'correo'])	}}
</div>

<div class="form-group">
	{{	Form::label('direccion', 'Dirección.:')	}}
	{{	Form::text('direccion', null,['class'=>'form-control','id'=>'direccion'])	}}
</div>

<div class="form-group">
	{{	Form::label('encargado', 'Encargado.:')	}}
	{{	Form::text('encargado', null,['class'=>'form-control','id'=>'encargado'])	}}
</div>

<div class="form-group">
	{{	Form::label('encargado_tel', 'Telefono del Encargado.:')	}}
	{{	Form::text('encargado_tel', null,['class'=>'form-control','id'=>'encargado_tel'])	}}
</div>


<div class="form-group">
    {{ Form::label('image', 'Imagenes') }}
    {{ Form::file('image') }}
 </div>     

<div class="form-group">
	
	{{	Form::submit('Guardar', ['class'=>'bt btn-sm btn-primary'])	}}
</div>

@section('script')

@endsection