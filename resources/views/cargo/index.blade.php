@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif

<div class="logo-lg">
  <h2>CARGOS</h2>
</div>
<div class="box box-infor"></div>
<div class="box-body">
<table class="table table-bordered table-striped">
  <thead>
    <th>Cargo</th>
  </thead>
  @foreach ($cargos as $cargo)
  <tbody>
    <td>{{$cargo->nombreCargo}}</td>
    <td>
      {!!link_to_route('cargo.edit',$title='Editar', $parametro=$cargo->id,$atributo=['class'=>'btn btn-primary'])!!}
    </td>
    <td>
      @include('cargo.eliminar')
    </td>
  </tbody>
 @endforeach
</table>
{!!$cargos->render()!!}
</div>
@stop
