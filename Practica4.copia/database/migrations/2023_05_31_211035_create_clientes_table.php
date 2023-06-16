<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('CI');
            $table->string('Nombres',100);
            $table->string('Apellidos',100);
            $table->date('FechaNacimiento');
            $table->string('Genero',20);
            $table->string('Direccion',100);
            $table->integer('Telefono');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
