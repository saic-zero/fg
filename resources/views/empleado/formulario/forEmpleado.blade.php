<?php
if($bandera==1){
	$suc=null;
	$car=null;
}else{
	$suc = $empleados->sucursal_id;
	$car = $empleados->cargo_id;
}
 ?>
 <div class="box box-default">
	 <div class="box-header with-border">
		 <h3 class="box-title">Empleados</h3>
		 <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
	 </div><!-- /.box-header -->
			 	<div class="box-body">

					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Datos personales</a></li>
							<li><a href="#tab_2" data-toggle="tab">Laborales</a></li>
							<li><a href="#tab_3" data-toggle="tab">Documentos de identificacion</a></li>
							<li><a href="#tab_4" data-toggle="tab">Laborales</a></li>

							<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="col-md-6">
								<br>
		 						 <div class="form-group">
									{!!Form::label('lbNombre','* Nombres:')!!}
								  {!!Form::text('nombresEmp',null,['class'=>'form-control', 'placeholder'=>'Nombres del Empleado...','required'])!!}
								 </div><!-- /.form-group -->
		 						 <div class="form-group">
									{!!Form::label('lbApellidos','* Apellidos:')!!}
		 							{!!Form::text('apellidosEmp',null,['class'=>'form-control', 'placeholder'=>'Apellidos del Empleado...','required'])!!}
		 						</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('lbSexo','* Sexo:')!!}
									{!!Form::text('sexo',null,['class'=>'form-control', 'placeholder'=>'sexo...','required'])!!}
								</div><!-- /.form-group -->
							</div><!-- /.col primera columna -->
		 					<div class="col-md-6">
									<br>
		 							<div class="form-group">
										{!!Form::label('lbFechaNac','* Fecha de Nacimiento:')!!}
										{!!Form::date('fechaNacimiento',null,['class'=>'form-control', 'placeholder'=>'Fecha...','required'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbTelefono','* Teléfono :')!!}
										<input name="telefonoEmp" id="telefonoEmp" type="text" class="form-control" data-inputmask='"mask": "9999-9999"' data-mask>
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbDomicilio','* Domicilio:')!!}
		 								{!!Form::textarea('direccionEmp',null,['class'=>'form-control', 'placeholder'=>'Domicilio del Empleado...','required', 'rows'=>'2', 'cols'=>'5'])!!}
		 							</div><!-- /.form-group -->
								</div><!-- /.col segunda columna -->
							</div><!-- /.tab-pane  cierre tab 1-->
							<div class="tab-pane" id="tab_2">
								<div class="col-md-6">
									<br>
									<div class="form-group">
										</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbCorreo','* Correo Electronico:')!!}
										{!!Form::email('correoEmp',null,['class'=>'form-control', 'placeholder'=>'direccion@mail.com','required'])!!}
									</div><!-- /.form-group -->
								</div><!-- /.col -->
							</div><!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								<div class="col-md-6">
									<br>
									<div class="form-group">
										{!!Form::label('lbDui','* DUI:')!!}
										{!!Form::text('DUI',null,['id'=>'dui','class'=>'form-control', 'placeholder'=>'Documento Unico de Identidad...','required'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbNit','* NIT:')!!}
										{!!Form::text('NIT',null,['id'=>'nit','class'=>'form-control', 'placeholder'=>'Numero de NIT...','required'])!!}
									</div><!-- /.form-group -->
								</div><!-- /.col -->
								<div class="col-md-6">
									<br>
									<div class="form-group">
										{!!Form::label('lbAFP','Num_AFP:')!!}
										{!!Form::text('numAFP',null,['class'=>'form-control', 'placeholder'=>'Ejemplo: 14555-555','required'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbISSS','Num_ISSS:')!!}
										{!!Form::text('numISSS',null,['class'=>'form-control', 'placeholder'=>'Ejemplo: 14555-555','id','required'])!!}
									</div><!-- /.form-group -->
								</div><!-- /.col -->
							</div><!-- /.tab-pane -->
							<div class="tab-pane" id="tab_4">
								<div class="col-md-6">
									<br>
									<div class="form-group">
										{!!Form::label('lbCodEmp','* Codigo_Empleado:')!!}
										{!!Form::text('codEmpleado',null,['class'=>'form-control', 'placeholder'=>'Codigo de Empleado...','required'])!!}

										</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbFechaIngSuc','* Fecha de Ingreso:')!!}
										{!!Form::date('fechaIngrSuc',null,['id'=>'fechaIngSuc','class'=>'form-control', 'placeholder'=>'Fecha de ingreso a farmacia...','required'])!!}
								</div><!-- /.form-group -->
							</div><!-- /.col -->
							<div class="col-md-6">
								<br>
							<div class="form-group">
								{!!Form::label('lbRefPer','Referencia laboral:')!!}
								{!!Form::text('referenciaLaboral',null,['id'=>'referenciaP','class'=>'form-control', 'placeholder'=>'Referencia Laboral...','required'])!!}
							</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('lbSucursal','* Sucursal:')!!}
									<select class="form-control" name="sucursal_id">
										@foreach($sucursals as $s)
											@if($suc=$s->id && $suc!=null)
												<option value="{{$s->id}}" selected="selected">{{$s->nombreSuc}}</option>
											@else
												<option value="{{$s->id}}">{{$s->nombreSuc}}</option>
											@endif
										@endforeach
									</select>
								</div><!-- /.form-group -->
							 </div><!-- /.col -->
							<div class="col-md-6">
								<div class="form-group">
									{!!Form::label('lbCargo','* Cargo:')!!}
									<select class="form-control" name="cargo_id">
										@foreach($cargos as $c)
											<option value="{{$c->id}}" >{{$c->nombreCargo}}</option>
										@endforeach
									</select>
								</div><!-- /.form-group -->
							</div><!-- /.col -->
								</div><!-- /.tab-pane -->
						</div><!-- /.tab-content -->
					</div><!-- nav-tabs-custom -->
		</div><!-- /.col -->
	</div><!-- /.row -->

</div><!-- /.box-body -->
