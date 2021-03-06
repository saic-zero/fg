<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Proveedor;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Requests\ProveedorCreateRequest;
use SICVFG\Http\Requests\ProveedorUpdateRequest;
use SICVFG\Http\Controllers\Controller;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
       $proveedors= \SICVFG\Proveedor::all();
        return view('proveedor.index',compact('proveedors'));
    }
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\H\SICVFG\ttp\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         \SICVFG\Proveedor::create([
        'nombreProv'=>$request['nombreProv'],
        'representanteProv'=> $request['representanteProv'],
        'RUC'=> $request['RUC'],
        'correoProv'=> $request['correoProv'],
        'direccionProv'=>$request['direccionProv'],
        'telefonoProv'=> $request['telefonoProv'],
        'estadoProv'=> 1, //Guardamos el estado con 1, para asumir que al ingresarlo esta activo logicamente
       ]);
      return redirect('/proveedor')->with('mensaje','Proveedor Agregado con Exito');
  }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//El metodo show se utilizara en este caso para habilitar un proveedor
    {
        $proveedor=\SICVFG\Proveedor::findOrFail($id);
        $proveedor->estadoProv=1; //modificamos el estado a cero asumir que esta deshabilitado
        $proveedor->update();
        Session::flash('mensaje','Proveedor Habilitado con Exito');
        return Redirect::to('/proveedor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
      $proveedor= \SICVFG\Proveedor::find($id);
      return view('proveedor.edit',['proveedor'=>$proveedor]);
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor= \SICVFG\Proveedor::find($id);
        $proveedor->fill($request->all());
        $proveedor->save();

        Session::flash('mensaje','Proveedor Editado con Exito');
        return Redirect::to('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    

        $proveedor=\SICVFG\Proveedor::findOrFail($id);
        $proveedor->estadoProv=0; //modificamos el estado a cero asumir que esta deshabilitado
        $proveedor->update();
         Session::flash('mensaje','Proveedor deshabilitado con Exito');
        return Redirect::to('/proveedor');
    }

}
