<div class="box box-default">
	<div class="box-header with-border">
		<h3 class="box-title">Sucursal</h3>
		<h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
	</div><!-- /.box-header -->
	<div class="box-body">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
							{!!Form::label('lbnombre','* Nombre Sucursal:')!!}
							{!!Form::text('nombreSuc',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Sucursal...','required'])!!}
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbRepresentante','* Representante:')!!}
							{!!Form::text('representanteSuc',null,['class'=>'form-control', 'placeholder'=>'Representante Legal...','required'])!!}
						</div><!-- /.form-group -->
						</div><!-- /.col -->
						<div class="col-md-6">
						<div class="form-group">
							{!!Form::label('lbTelefono','* Telefono:')!!}
							{!!Form::text('telefonoSuc',null,['class'=>'form-control', 'placeholder'=>'Telefono...','required'])!!}
						</div><!-- /.form-group -->
						<div class="form-group">
							{!!Form::label('lbEstado','* Estado:')!!}
								<select class="form-control" name="estadoSuc" 'required'>
										<option value="">Activo</option>
										<option value="">Desactivo</option>
							</select>
							{!!Form::label('lbdireccion','* Dirección:')!!}
							{!!Form::textarea('direccionSuc',null,['class'=>'form-control', 'placeholder'=>'Dirección...','required', 'rows'=>'2', 'cols'=>'5'])!!}
</div><!-- /.form-group -->
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.box-body -->
