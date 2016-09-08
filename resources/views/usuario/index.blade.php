@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif
<table class="table">
  <thead>
    <th>Nombre</th>
    <th>Correo</th>
  </thead>
  @foreach ($users as $user)
  <tbody>
    <td>{{$user->CodUsuario}}</td>
    <td>{{$user->user_id}}</td>
    <td>
      {!!link_to_route('usuario.edit',$title='Editar', $parametro=$user->id,$atributo=['class'=>'btn btn-primary'])!!}
    </td>
<td>@include('usuario.eliminar')</td>
  </tbody>
  @endforeach
</table>
@stop
