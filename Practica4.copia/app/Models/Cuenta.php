<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $fillable=[
        'Saldo',
        'HoraCreacion',
        'FechaCreacion',
        'Tipo',
        'IdCliente',
    ];
    public $timestamps=false;
    public function Clientes()
    {
        return $this->belongsTo(Cliente::class,'IdCliente');
    }
}
