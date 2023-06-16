<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cuentas = Cuenta::all();
        return view('FrmCategoria',['cuentas'=>$cuentas]);
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
        $cuentas=new Cuenta();
        $cuentas->Saldo=$request->Saldo;
        $cuentas->HoraCreacion=$request->Hora;
        $cuentas->FechaCreacion=$request->Fecha;
        $cuentas->Tipo=$request->Tipo;
        $cuentas->IdCliente=$request->IdCliente;
        $cuentas->save();
        return back()->with('Agregar','Agregacion Completa');
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
        $Edit=Cuenta::findOrfail($id);
        return view('FrmRegistrarCuenta',['Edit'=>$Edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cuentas=Cuenta::findOrFail($id);
        $cuentas->Saldo=$request->Saldo;
        $cuentas->HoraCreacion=$request->Hora;
        $cuentas->FechaCreacion=$request->Fecha;
        $cuentas->Tipo=$request->Tipo;
        $cuentas->IdCliente=$request->IdCliente;
        $cuentas->save();
        return back()->with('Update','Actualizacion Completada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cuentas = Cuenta::findOrfail($id);
        $cuentas->delete();
        return back()->with('Eliminar','Eliminacion Completada');
    }
}
