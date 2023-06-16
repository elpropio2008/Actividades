<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('FrmCliente',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes=new Cliente();
        $clientes->CI=$request->TxtCi;
        $clientes->Nombres=$request->TxtNombres;
        $clientes->Apellidos=$request->TxtApellidos;
        $clientes->FechaNacimiento=$request->DtpFecha;
        $clientes->Genero=$request->TxtGenero;
        $clientes->Direccion=$request->TxtDireccion;
        $clientes->Telefono=$request->TxtTelefono;
        $clientes->save();
        return back()->with('AgregarCliente','Agregacion Completa');
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
        $Edit=Cliente::findOrfail($id);
        return view('FrmModificarClientes',['Edit'=>$Edit]);
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
        $clientes=Cliente::findOrFail($id);
        $clientes->CI=$request->TxtCi;
        $clientes->Nombres=$request->TxtNombres;
        $clientes->Apellidos=$request->TxtApellidos;
        $clientes->FechaNacimiento=$request->DtpFecha;
        $clientes->Genero=$request->TxtGenero;
        $clientes->Direccion=$request->TxtDireccion;
        $clientes->Telefono=$request->TxtTelefono;
        $clientes->save();
        return back()->with('ActualizarCliente','Actualizacion Completada');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = Cliente::findOrfail($id);
        $clientes->delete();
        return back()->with('EliminarCliente','Eliminacion Completada');
    }
}
