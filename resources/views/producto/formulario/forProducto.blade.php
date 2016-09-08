<?php
if($bandera==1){
	$categ=null;
}else{
	$categ = $producto->categoria_id;
}
 ?>

<div class="logo-lg">
  <h2 >PRODUCTO</h2>
</div>

 <div class="container-fluid">
     <div class="box box-success">
      <div class="box-body">
        <div class="row">
          <div class="col-md-9">
                 <table id="tabla1" class="table stacktable">

        <div class="form-group">
        {!!Form::label('lbCodPro','Codigo Producto:')!!}
		{!!Form::text('codProducto',null,['class'=>'form-control', 'placeholder'=>'Codigo de Producto..','required'])!!}
	    </div>
	

        <div class="form-group">
	    {!!Form::label('lbNombre','Nombre:')!!}
		{!!Form::text('nombreProd',null,['class'=>'form-control', 'placeholder'=>'Nombre del Producto...','required'])!!}
		</div>
	     
	    <div class="form-group">
		{!!Form::label('lbDescripcionPro','Descripcion:')!!}
		{!!Form::textarea('descripcionProd',null,['class'=>'form-control', 'placeholder'=>'Descripcion del Producto','required'])!!}
	    </div>


	    <div class="form-group">
		{!!Form::label('lbPresentacionPro','Presentacion:')!!}
		{!!Form::text('presentacionProd',null,['class'=>'form-control', 'placeholder'=>'Presentacion del Producto','required'])!!}
		</div>
	     
	    <div class="form-group">
		{!!Form::label('lbStockMinimo','Stock Minimo:')!!}</td>
		{!!Form::number('stockMinimo',null,['class'=>'form-control', 'placeholder'=>'Cantidad Minima en existencia','required'])!!}
	    </div>


	    <div class="form-group">
		{!!Form::label('lbStockMaximo','Stock Maximo:')!!}
		{!!Form::number('stockMaximo',null,['class'=>'form-control', 'placeholder'=>'Cantidad Maxima en existencia','required'])!!}
	    </div>

	    <div class="form-group">
		{!!Form::label('lbCategoria','Categoria:')!!}
				<select class="form-control" name="categoria_id">
					@foreach($categorias as $cat)
					@if($categ=$cat->id && $categ!=null)
					<option value="{{$cat->id}}" selected="selected">{{$cat->nombreCategoria}}</option>
					@else
					<option value="{{$cat->id}}">{{$cat->nombreCategoria}}</option>
							@endif
					
					@endforeach
				</select>

				   </div>
				    </div>
			   </div>
         </div>
     </div>
  </div>