<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuario::paginate(1);
        return view('usuario.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'Nombre'=>'required|string|max:40',
            'Apellidos'=>'required|string|max:100',
            'Numerotrabajador'=>'required|integer',
            'Correo'=>'required|email',
            'Contraseña'=>'required|string|max:40',
            'Aval'=>'required|string|max:40',
            'Dependencia'=>'required|string|max:40'
        ];

        $mensaje=[
            'required'=>'Campo :attribute faltante'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosUsuario = request()->except('_token');
        Usuario::insert($datosUsuario);

        //return response()->json($datosUsuario);
        return redirect('usuario')->with('mensaje', 'Usuario agregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'Nombre'=>'required|string|max:40',
            'Apellidos'=>'required|string|max:100',
            'Numerotrabajador'=>'required|integer',
            'Correo'=>'required|email',
            'Contraseña'=>'required|string|max:40',
            'Aval'=>'required|string|max:40',
            'Dependencia'=>'required|string|max:40'
        ];

        $mensaje=[
            'required'=>'Campo :attribute faltante'
        ];

        $this->validate($request,$campos,$mensaje);

        $datosUsuario = request()->except(['_token','_method']);
        Usuario::where('id','=',$id)->update($datosUsuario);
        $usuario=Usuario::findOrFail($id);
        return redirect('usuario')->with('mensaje', 'Registro modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Usuario::destroy($id);
        return redirect('usuario')->with('mensaje','Registro eliminado');
    }
}
