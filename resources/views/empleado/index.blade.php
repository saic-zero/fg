@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif


<div class="logo-lg">
  <h2>TABLA EMPLEADOS</h2>
</div>
<div class="box-body">
  <div class="box box-infor"></div>
<table class="table table-bordered table-striped">
  <thead>
    <th>Empleado</th>
  </thead>
  @foreach ($empleados as $empleado)
  <tbody>
    <td>{{$empleado->nombresEmp}}</td>
    <td>{{$empleado->apellidosEmp}}</td>
    <td>
      {!!link_to_route('empleado.edit',$title='Editar', $parametro=$empleado->id,$atributo=['class'=>'btn btn-primary'])!!}
    </td>
    <td>@include('empleado.eliminar')</td>

  </tbody>
 @endforeach
</table>
{!!$empleados->render()!!}
</div>
@stop
