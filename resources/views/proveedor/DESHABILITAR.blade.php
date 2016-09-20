{!! Form::open(['route'=>['proveedor.destroy',$proveedor->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Deshabilitar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
