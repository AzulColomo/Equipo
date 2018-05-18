@extends ('layout')



@section ('content')

<form method="POST" action="{{ route('Mantenimiento.update',$manten) }}">
{{ csrf_field() }} {{method_field('PUT')}}

<div class = "form-group col-md-12{{
	$errors->has('t_equipo') ? 'has-error' : ''
}}">






<label>Tipo de Equipo</label>
<input type="" name="t_equipo" class="form-control" value=" {{ old ('t_equipo', $manten->t_equipo) }}" placeholder="Ingresa aqui el tipo ">

{!! $errors->first('t_equipo', '<span class="helps-block">:message</span>') !!}

</div>

<label>Marca</label>
<input type="" name="marca" class="form-control" value=" {{ old ('marca', $manten->marca) }}" placeholder="Ingresa aqui la marca ">

<label>Modelo</label>
<input type="" name="modelo" class="form-control" value=" {{ old ('modelo',$manten->modelo) }}" placeholder="Ingresa aqui el modelo ">

<label>Numero de serie</label>
<input type="" name="n_serie" class="form-control" value=" {{ old ('n_serie', $manten->n_serie) }}" placeholder="Ingresa aqui el numero de serie ">


<div>

	
</div>
<div class="form-group">
	<label>Fecha de publicacion</label>
	<div class="input-group date">
	<div class="input-group-addon">
	<i class="fa fa-calendar"></i>

</div>

<input type="" name="fecha_manten" class="form-control pull-right" value=" {{ old ('fecha_manten', $manten->fecha_manten ? $manten->fecha_manten->format('d-m-Y') : null) }}"
 id="datepicker">

</div>
</div>







	






</div>



<div class="box_footer">
<button type="submit" class="btn btn-primary btn-block">Guardar</button>
	
</div>


</form>

@stop

@push ('stiles')

<link rel="stylesheet" href="/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
@endpush
@push('scripts')

<script src="/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
	$('#datepicker').datepicker({
		lenguaje:"es",
		autoclose:true,
		format: 'dd-mm-yyyy',
		todayHighlight: true
});
	</script>
@endpush

