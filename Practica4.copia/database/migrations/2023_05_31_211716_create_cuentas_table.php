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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            $table->integer('Saldo');
            $table->time('HoraCreacion');
            $table->date('FechaCreacion');
            $table->string('Tipo',50);            
            $table->foreignId('IdCliente')
            ->nullable()
            ->constrained('clientes');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
