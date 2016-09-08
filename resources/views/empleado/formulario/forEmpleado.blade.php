<?php
if($bandera==1){
	$suc=null;
	$car=null;
}else{
	$suc = $empleados->sucursal_id;
	$car = $empleados->cargo_id;
}
 ?>
<h4><i class="fa fa-angle-right"></i>Empleados </h4>
<hr>
<div class="box box-infor">
<table class="table" >
	<tr>
		<td>{!!Form::label('lbCodEmp','Codigo_Empleado:')!!}</td>
		<td>{!!Form::text('codEmpleado',null,['class'=>'form-control', 'placeholder'=>'Codigo de Empleado...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbNombre','Nombres:')!!}</td>
		<td>{!!Form::text('nombresEmp',null,['class'=>'form-control', 'placeholder'=>'Nombres del Empleado...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbApellidos','Apellidos:')!!}</td>
		<td>{!!Form::text('apellidosEmp',null,['class'=>'form-control', 'placeholder'=>'Apellidos del Empleado...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbDomicilio','Domicilio:')!!}</td>
		<td>{!!Form::textarea('direccionEmp',null,['class'=>'form-control', 'placeholder'=>'Domicilio del Empleado...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbFechaNac','Fecha de Nacimiento:')!!}</td>
		<td>{!!Form::date('fechaNacimiento',null,['class'=>'form-control', 'placeholder'=>'Fecha...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbSexo','Sexo:')!!}</td>
		<td>{!!Form::text('sexo',null,['class'=>'form-control', 'placeholder'=>'sexo...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbTelefono','Teléfono :')!!}</td>
		<td>{!!Form::text('telefonoEmp',null,['id'=>'telefonoEmpleado','class'=>'form-control', 'placeholder'=>'Teléfono ej: 7777-7777...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbCorreo','Correo Electronico:')!!}</td>
		<td>{!!Form::email('correoEmp',null,['class'=>'form-control', 'placeholder'=>'direccion@mail.com','required'])!!}</td>
	</tr>
		<tr>
		<td>{!!Form::label('lbDui','DUI:')!!}</td>
		<td>{!!Form::text('DUI',null,['id'=>'dui','class'=>'form-control', 'placeholder'=>'Documento Unico de Identidad...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbNit','NIT:')!!}</td>
		<td>{!!Form::text('NIT',null,['id'=>'nit','class'=>'form-control', 'placeholder'=>'Numero de NIT...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbAFP','Num_AFP:')!!}</td>
		<td>{!!Form::text('numAFP',null,['class'=>'form-control', 'placeholder'=>'Ejemplo: 14555-555','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbISSS','Num_ISSS:')!!}</td>
		<td>{!!Form::text('numISSS',null,['class'=>'form-control', 'placeholder'=>'Ejemplo: 14555-555','id','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbRefPer','Referencia laboral:')!!}</td>
		<td>{!!Form::text('referenciaLaboral',null,['id'=>'referenciaP','class'=>'form-control', 'placeholder'=>'Referencia Laboral...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbFechaIngSuc','Fecha de Ingreso:')!!}</td>
		<td>{!!Form::date('fechaIngrSuc',null,['id'=>'fechaIngSuc','class'=>'form-control', 'placeholder'=>'Fecha de ingreso a farmacia...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbestEmp','Estado:')!!}</td>
		<td>{!!Form::text('estadoEmp',null,['id'=>'estadoEmp','class'=>'form-control', 'placeholder'=>'...','required'])!!}</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbSucursal','Sucursal:')!!}</td>
		<td colspan="2">
				<select class="form-control" name="sucursal_id">
					@foreach($sucursals as $s)
					@if($suc=$s->id && $suc!=null)
					<option value="{{$s->id}}" selected="selected">{{$s->nombreSuc}}</option>
					@else
							<option value="{{$s->id}}">{{$s->nombreSuc}}</option>
							@endif
					@endforeach
				</select>
			</td>
	</tr>
	<tr>
		<td>{!!Form::label('lbCargo','Cargo:')!!}</td>
		<td colspan="2">
				<select class="form-control" name="cargo_id">
					@foreach($cargos as $c)
					<option value="{{$c->id}}">{{$c->nombreCargo}}</option>
					@endforeach
				</select>
			</td>
	</tr>
</table>
</div>
