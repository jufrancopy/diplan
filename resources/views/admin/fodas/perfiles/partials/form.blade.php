{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{	Form::label('nombre', 'Nombre:')	}}
	{{	Form::text('nombre', null,['class'=>'form-control','id'=>'nombre'])	}}
</div>
<div class="form-group">
	{{	Form::label('contexto', 'Contexto:')	}}
	{{	Form::text('contexto', null,['class'=>'form-control','id'=>'contexto'])	}}
</div>

<div class="form-group">
    {{ Form::label('categorias', 'Asingne una o variasCategorias:') }} 
    <select multiple="multiple" name="categoria_id[]" id="categoria_id" class="js-example-responsive" style="width:100%">
    @foreach($categorias as $key => $value)
        {-- in_array verifica el valor (llave => valor) este contenido en el array --}
        <option value="{{ $key }}" {{ in_array($key, $categoriasChecked) ? 'selected' : null }}>{{ $value }}</option>
    @endforeach
    </select>    
</div>

<div class="form-group">

	{{	Form::submit('Guardar', ['class'=>'bt btn-sm btn-primary'])	}}
</div>


