<?php

$aux=1;
?>

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
                  <h3 class="box-title">Listado de Proveedores</h3>
              </div><!-- /.box-header -->

              <div class="box-body">
            
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Activos</a></li>
              <li><a href="#tab_2" data-toggle="tab">Inactivos</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
                   
                   <div class="tab-content">
                     <div class="tab-pane active" id="tab_1"> 
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <th>NOMBRE</th>
                              <th>REPRESENTANTE</th>
                              <th>CORREO</th>
                              <th>DIRECCION</th>
                              <th>TELEFONO</th>
                              <th>ESTADO</th>
                              <th>ACCION 1</th>
                              <th>ACCION 2</th>
                          </thead>
                          @foreach ($proveedors as $proveedor)
                      
                          <tbody>
                             @if($proveedor->estadoProv==1)

                             <td>{{$proveedor->nombreProv}}</td>
                             <td>{{$proveedor->representanteProv}}</td>
                             <td>{{$proveedor->correoProv}}</td>
                             <td>{{$proveedor->direccionProv}}</td>
                             <td>{{$proveedor->telefonoProv}}</td>
                             <td>{{$proveedor->estadoProv}}</td>
                             <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                              <td>@include('proveedor.DESHABILITAR')</td>
                            @endif
                          </tbody>
                            
                            @endforeach
                        </table>
                      </div>

                   
                 
          <div class="tab-pane" id="tab_2">
                 <section>
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                      <th>NOMBRE</th>
                      <th>REPRESENTANTE</th>
                      <th>CORREO</th>
                      <th>DIRECCION</th>
                      <th>TELEFONO</th>
                      <th>ESTADO</th>
                      <th>ACCION 1</th>
                      <th>ACCION 2</th>
                  </thead>
                  @foreach ($proveedors as $proveedor)
              
                  <tbody>
                     @if($proveedor->estadoProv==0)

                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
                     <td>{{$proveedor->estadoProv}}</td>
                     <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
                     <td>@include('proveedor.HABILITAR')</td>
                    @endif
                  </tbody>
                    
                    @endforeach
                  </table>
                   </section>
                   </div>
                  </div> 
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
        "searching": true,
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

