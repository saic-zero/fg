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
        <h3 class="box-title">Lista de Cargos</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Cargo</th>
              <th>Accion</th>
            </tr>
          </thead>
          @foreach ($cargos as $cargo)
          <tbody>
            <tr>
              <td>{{$cargo->nombreCargo}}</td>
              <td> {!!link_to_route('cargo.edit',$title='Editar', $parametro=$cargo->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
            </tr>
            </tbody>
            @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  <div>
    <li class="warning confirm">
  		<div class="ui">
  			<button>Try me!</button>
  		</div>

  	</li>
  </div>

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

  <!-- <script>
  document.querySelector('ul.examples li.warning.confirm button').onclick = function(){
  	swal({
  		title: "Are you sure?",
  		text: "You will not be able to recover this imaginary file!",
  		type: "warning",
  		showCancelButton: true,
  		confirmButtonColor: '#DD6B55',
  		confirmButtonText: 'Yes, delete it!',
  		closeOnConfirm: false
  	},
  	function(){
  		swal("Deleted!", "Your imaginary file has been deleted!", "success");
  	});
  };


  </script> -->

@stop
