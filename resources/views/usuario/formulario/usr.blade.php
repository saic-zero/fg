<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Usuario</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
       <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!!Form::label('lbEmpleados','Empleados:')!!}
              <select class="form-control" name="user_id", id="selectEmpleado">
                    @foreach($empleados as $emp)
                        <option value="{{$emp->codEmpleado}}">{{$emp->nombresEmp}}</option>
                    @endforeach
                  </select>
                </div><!-- /.form-group -->
                <div class="form-group">
                {!!form::label('* Usuario')!!}
              {!!form::text('CodUsuario',null,['id'=>'cod','class'=>'form-control','placeholder'=>'ingrese el nombre del usuario','disabled','required'])!!}
            </div><!-- /.form-group -->
            </div><!-- /.col -->
            <div class="col-md-6">
							<div class="form-group">
          {!!form::label('* Contraseña')!!}
              {!!form::password('password',['class'=>'form-control','placeholder'=>'ingrese su password de usuario','title'=>'hola','required'])!!}
            </div><!-- /.form-group -->
            <div class="form-group">
            {!!form::label('* Estado')!!}
              {!!form::text('estadoUsu',null,['class'=>'form-control','placeholder'=>'estado usuario','required'])!!}
            </div><!-- /.form-group -->
          </div><!-- /.col -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
