{!! Form::open(['route'=>['proveedor.show',$proveedor->id],'method'=>'GET']) !!}
  {!! Form::submit('Habilitar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
