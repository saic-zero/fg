<div class="logo-lg">
  <h2 >PROVEEDOR</h2>
</div>

 <div class="container-fluid">
     <div class="box box-success">
      <div class="box-body">
        <div class="row">
          <div class="col-md-9">
                 <table id="tabla1" class="table stacktable">

						 <div class="form-group">
						{!!form::label('Nombre')!!}
						{!!form::text('nombreProv',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Proveedor'])!!}
						</div>

						<div class="form-group">
						{!!form::label('Representante')!!}
						{!!form::text('representanteProv',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre de Representante'])!!}
						</div>

						<div class="form-group">
						{!!form::label('RUC')!!}
						{!!form::text('RUC',null,['class'=>'form-control','placeholder'=>'Ingrese Numero de RUC'])!!}
						</div>

						<div class="form-group">
						{!!form::label('Correo')!!}
						{!!form::text('correoProv',null,['class'=>'form-control','placeholder'=>'Ingrese su Correo'])!!}
						</div>

						<div class="form-group">
						{!!form::label('Direccion')!!}
						{!!form::text('direccionProv',null,['class'=>'form-control','placeholder'=>'Ingrese su Dirección'])!!}
						</div>


						<div class="form-group">
						{!!form::label('Telefono')!!}
						{!!form::text('telefonoProv',null,['class'=>'form-control','placeholder'=>'Ingrese su Numero de Telefono'])!!}
						</div>

						<div class="form-group">
						{!!form::label('Estado')!!}
						{!!form::text('estadoProv',null,['class'=>'form-control','placeholder'=>'Ingrese Estado'])!!}
						</div>
            </div>
         </div>
     </div>
  </div>


