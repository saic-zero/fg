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
        <h3 class="box-title">Lista de Usuarios</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Estado</th>
              <th>Acción</th>
            </tr>
          </thead>
          @foreach ($users as $user)
          <tbody>
            <tr>
              <td>{{$user->CodUsuario}}</td>
              <td>{{$user->estadoUsu}}</td>
              <td> {!!link_to_route('usuario.edit',$title='Editar', $parametro=$user->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
      });
    });
  </script>
@stop
