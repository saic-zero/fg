
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
  <h2 >TABLA DE CATEGORIAS</h2>
</div>

 <div class="container-fluid">
     <div class="box box-success">
      <div class="box-body">
        <div class="row">
          <div class="col-md-9">
                 <table id="tabla1" class="table stacktable">
                       <thead>
                      <th>NOMBRE</th>
                       </thead>
                     </div>
                  @foreach ($categorias as $categoria)
                      <tbody>
                          <td>{{$categoria->nombreCategoria}}</td>
                          <td>
                            {!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}
                          </td>
                          <td>@include('categoria.eliminar')</td>
                    </tbody>
                 @endforeach
                  </table>

                  {!!$categorias->render()!!} <!-- Para paginar las listas de productos , En el controller se define el numero en la funcion index..-->
            </div>
         </div>
     </div>
  </div>

@stop






