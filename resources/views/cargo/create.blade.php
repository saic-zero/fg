@extends('layouts.admin')
@section('content')

{!! Form::open(['route'=>'cargo.store','method'=>'POST']) !!}
    @include('cargo.formulario.frmCargo')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
