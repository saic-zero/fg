<div class="box box-infor">
<table class="table">
	<tr>
		<td>{!!Form::label('lbnombre','Nombre Sucursal:')!!}</td>
		<td>{!!Form::text('nombreSuc',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Sucursal...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbRepresentante','Representante:')!!}</td>
		<td>{!!Form::text('representanteSuc',null,['class'=>'form-control', 'placeholder'=>'Representante Legal...','required'])!!}</td>
	</tr>
  <tr>
		<td>{!!Form::label('lbTelefono','Telefono:')!!}</td>
		<td>{!!Form::text('telefonoSuc',null,['class'=>'form-control', 'placeholder'=>'Telefono...','required'])!!}</td>
	</tr>
  <tr>
		<td>{!!Form::label('lbEstado','Estado:')!!}</td>
		<td>{!!Form::text('estadoSuc',null,['class'=>'form-control', 'placeholder'=>'Estado...','required'])!!}</td>
	</tr>

  <tr>
		<td>{!!Form::label('lbdireccion','Dirección:')!!}</td>
		<td>{!!Form::textarea('direccionSuc',null,['class'=>'form-control', 'placeholder'=>'Dirección...','required'])!!}</td>
	</tr>
</table>
</div>
