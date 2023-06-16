<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[
        'CI',
        'Nombres',
        'Apellidos',
        'FechaNacimiento',
        'Genero',
        'Direccion',
        'Telefono'
    ];
    public $timestamps=false;

    public function Cuenta()
    {
        return $this->hasMany(Cuenta::class,'id');
    }
}
