@extends ('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($cargos,['route'=>['cargo.update',$cargos->id],'method'=>'PUT']) !!}
    @include('cargo.formulario.frmCargo')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@stop
