@include('alertas.request')
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Presentacion</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <table class="table">
          <tr>
            <td>{!!Form::label('lbnombre','* Nombre Presentacion:')!!}</td>
            <td>{!!Form::text('nombreCategoria',null,['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de presentacion a crear...','required'])!!}</td>
          </tr>
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->