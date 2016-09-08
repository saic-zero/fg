
@extends('layouts.admin')

<script type=”text/javascript”>
$(document).ready(function() {
$(‘#tabla1′).stacktable();
});
</script>

@section('content')
@if (Session::has('mensaje'))

<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif

          <div class="logo-lg">
            <h2 >TABLA DE PROVEEDORES</h2>
          </div>

           <div class="container-fluid">
               <div class="box box-success">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-11">
                           <table id="tabla1" class="table stacktable" border="0">
                                 <thead>
                                    <th>NOMBRE</th>
                                    <th>REPRESENTANTE</th>
                                    <th>RUC</th>
                                    <th>CORREO</th>
                                    <th>DIRECCION</th>
                                    <th>TELEFONO</th>
                                    <th>ESTADO</th>
                                  </thead>
                                  @foreach ($proveedors as $proveedor)
                                  <tbody>
                                    <td>{{$proveedor->nombreProv}}</td>
                                    <td>{{$proveedor->representanteProv}}</td>
                                    <td>{{$proveedor->RUC}}</td>
                                    <td>{{$proveedor->correoProv}}</td>
                                    <td>{{$proveedor->direccionProv}}</td>
                                    <td>{{$proveedor->telefonoProv}}</td>
                                    <td>{{$proveedor->estadoProv}}</td>
                                                     


              <td>
                {!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}
              </td>
          <td>@include('proveedor.eliminar')</td>

            </tbody>
            @endforeach

                  </table>
              {!!$proveedors->render()!!} <!-- Para paginar las listas de productos , En el controller se define el numero en la funcion index..-->     
            </div>
         </div>
     </div>
  </div>

@stop
