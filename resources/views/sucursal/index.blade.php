@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif

<div class="logo-lg">
  <h2>SUCURSALES</h2>
</div>
<div class="box box-infor"></div>
<div class="box-body">
<table class="table table-bordered table-striped">
  <thead>
    <th>Sucursal</th>
  </thead>
  @foreach ($sucursals as $sucursal)
  <tbody>
    <td>{{$sucursal->nombreSuc}}</td>
    <td>
      {!!link_to_route('sucursal.edit',$title='Editar', $parametro=$sucursal->id,$atributo=['class'=>'btn btn-primary'])!!}
    </td>
    <td>@include('sucursal.eliminar')</td>
  </tbody>
 @endforeach
</table>
{!!$sucursals->render()!!}
</div>
@stop
