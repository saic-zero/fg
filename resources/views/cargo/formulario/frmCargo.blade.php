@include('alertas.request')
<div class="box box-infor">
<table class="table">
	<tr>
		<td>{!!Form::label('lbnombre','Nombre Cargo:')!!}</td>
		<td>{!!Form::text('nombreCargo',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del cargo a crear...','required'])!!}</td>
	</tr>
</table>
</div>
