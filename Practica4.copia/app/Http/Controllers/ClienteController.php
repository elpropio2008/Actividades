<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('FrmCliente',['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Edit=Cliente::findOrfail($id);
        return view('FrmModificarClientes',['Edit'=>$Edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
     */
    public function destroy(string $id)
    {
        $clientes = Cliente::findOrfail($id);
        $clientes->delete();
        return back()->with('EliminarCliente','Eliminacion Completada');
    }
}
