{{ Form::hidden('user_id', auth()->user()->id) }}
{{ Form::hidden('perfil_id', $analisis->perfil_id) }}

<div class="form-group">
{{  Form::label('tipo', 'Tipo:')    }}<br>
 
@if ($ambiente[0]->ambiente == 'Interno')
 <label>
        {{  Form::radio('tipo', 'Fortaleza')}} Fortaleza
    </label>
    <label>
        {{  Form::radio('tipo', 'Debilidad')}} Debilidad
    </label>
@else
<label>
        {{  Form::radio('tipo', 'Oportunidad')}} Oportunidad
    </label>
    <label>
        {{  Form::radio('tipo', 'Amenaza')}} Amenaza
    </label>
@endif
</div>

<div class="form-group">
	{{	Form::label('ocurrencia', 'Nivel de Ocurrencia')	}}
	{{	Form::select('ocurrencia', array('0.1' => 'Baja', '0.3' => 'Media', '0.5' => 'Alta', '0.7' => 'Muy Alta', '0.9' => 'Cierta'), NULL, array('class' => 'form-control', 'placeholder'=>'Seleccione una opcion')) }}
</div>

<div class="form-group">
	{{	Form::label('impacto', 'Nivel de Impacto')	}}
	{{	Form::select('impacto', array('0.05' => 'Muy Bajo', '0.1' => 'Bajo', '0.2' => 'Moderado', '0.4' => 'Alto', '0.8' => 'Muy Alto'), NULL, array('class' => 'form-control', 'placeholder'=>'Seleccione una opcion')) }}
</div>

<div class="form-group">
	
	{{	Form::submit('Guardar', ['class'=>'bt btn-sm btn-primary'])	}}
</div>

@section('script')

@endsection