<?php
namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Categoria;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $categorias= \SICVFG\Categoria::all();
        //Accedemos al modelo a extraer los datos que necesitamos
       return view ('categoria.index',compact('categorias'));
        //Enviamos la informacion obtenida en la variable categoria  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
      Categoria::create([
    //primer parametro es el campo de BD y el segundo es el del formulario
      'nombreCategoria'=>$request['nombreCategoria'],
      ]);
      return redirect('/categoria')->with('mensaje','Categoria Agregada con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {
      $categoria= \SICVFG\Categoria::find($id);
      return view('categoria.edit',['categoria'=>$categoria]);
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
        $categoria= \SICVFG\Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();

        Session::flash('mensaje','Categoria Editado con Exito');
        return Redirect::to('/categoria');
    }

    /**
     * Remove the specified resource from storage  *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \SICVFG\Categoria::destroy($id);
        Session::flash('mensaje','Categoria Eliminada con Exito');
        return Redirect::to('/categoria');

    }
}
