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
            <h3 class="box-title">Lista de Sucursales</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Sucursal</th>
                  <th>Representante</th>
                  <th>Telefono</th>
                  <th>Estado</th>
                  <th>Dirección</th>
                  <th>Acción</th>
                </tr>
              </thead>
              @foreach ($sucursals as $sucursal)
              <tbody>
              <tr>
                <td>{{$sucursal->nombreSuc}}</td>
                <td>{{$sucursal->representanteSuc}}</td>
                <td>{{$sucursal->telefonoSuc}}</td>
                <td>{{$sucursal->estadoSuc}}</td>
                <td>{{$sucursal->direccionSuc}}</td>
                <td>
                  {!!link_to_route('sucursal.edit',$title='Editar', $parametro=$sucursal->id,$atributo=['class'=>'btn btn-primary'])!!}
                </td>
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
