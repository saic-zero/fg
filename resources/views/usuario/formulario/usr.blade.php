<h4><i class="fa fa-angle-right"></i>Empleados </h4>
<hr>
<div class="box box-infor">
<table class="table">
  <tr>
    <td>{!!Form::label('lbEmpleados','Empleados:')!!}</td>
    <td colspan="2">
        <select class="form-control" name="user_id", id="selectEmpleado">
          @foreach($empleados as $emp)
              <option value="{{$emp->codEmpleado}}">{{$emp->nombresEmp}}</option>
          @endforeach
        </select>
      </td>
  </tr>
  <tr>
    <td>{!!form::label('Usuario')!!}</td>
    <td>{!!form::text('CodUsuario',null,['id'=>'cod','class'=>'form-control','placeholder'=>'ingrese el nombre del usuario','disabled','required'])!!}</td>
  </tr>
  <tr>
    <td>{!!form::label('Password')!!}</td>
    <td>{!!form::password('password',['class'=>'form-control','placeholder'=>'ingrese su password de usuario','title'=>'hola','required'])!!}</td>
  </tr>
  <tr>
    <td>{!!form::label('Estado')!!}</td>
    <td>{!!form::text('estadoUsu',null,['class'=>'form-control','placeholder'=>'estado usuario','required'])!!}</td>
  </tr>
</table>
</div>
