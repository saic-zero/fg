<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Usuario;
use SICVFG\Empleado;
use Session;
use Redirect;
use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users= \SICVFG\Usuario::paginate(5);
        return view('usuario.index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $empleados=Empleado::All();
      return view('usuario.create',compact('empleados'));
    }

    // public function getCodigoEmp(Request $request, $id){
    //   if($request->ajax()){
    //     $cod=Empleado::getCodEmp($id);
    //     return response()->json($cod);
    //   }
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Usuario::create([
        'CodUsuario'=>$request['CodUsuario'],
        'password'=> $request['password'],
        'estadoUsu'=>$request['estadoUsu'],
        'user_id'=>$request['user_id'],
      ]);
      return redirect('/usuario')->with('mensaje','store');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user= Usuario::find($id);
      $empleados=Empleado::All();
      return view('usuario.edit',compact('user','empleados'));
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
        $user= Usuario::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('mensaje','Usuario editado correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('mensaje','Usuario eliminado correctamente');
        return Redirect::to('/usuario');
    }
}
