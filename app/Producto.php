<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
      protected $table="productos";

    protected $fillable = ['codProducto','nombreProd', 'descripcionProd', 'presentacionProd','stockMinimo', 'stockMaximo', 'categoria_id'];
}
