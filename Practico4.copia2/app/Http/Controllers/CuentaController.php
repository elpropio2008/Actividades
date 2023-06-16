<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuenta;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::all();
        return view('FrmCategoria',['cuentas'=>$cuentas]);
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
        $Edit=Cuenta::findOrfail($id);
        return view('FrmRegistrarCuenta',['Edit'=>$Edit]);
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuentas = Cuenta::findOrfail($id);
        $cuentas->delete();
        return back()->with('Eliminar','Eliminacion Completada');
    }
}
