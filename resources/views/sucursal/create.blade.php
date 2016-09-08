@extends('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'sucursal.store','method'=>'POST']) !!}
    @include('sucursal.formulario.sucur')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
