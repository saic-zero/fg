@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif


<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Lista de Empleados</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Contratación</th>
              <th>Acción</th>
            </tr>
          </thead>
          @foreach ($empleados as $empleado)
          <tbody>
            <tr>
              <td>{{$empleado->nombresEmp}}</td>
              <td>{{$empleado->apellidosEmp}}</td>
              <td>{{$empleado->direccionEmp}}</td>
              <td>{{$empleado->telefonoEmp}}</td>
              <td>{{$empleado->fechaIngrSuc}}</td>
              <td>{!!link_to_route('empleado.edit',$title='Editar', $parametro=$empleado->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->

@stop
