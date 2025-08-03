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
        Schema::create('tareas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_produccion')->index('id_produccion');
            $table->integer('id_maquina')->nullable()->index('id_maquina');
            $table->dateTime('fecha_hora_inicio')->nullable();
            $table->dateTime('fecha_hora_termino')->nullable();
            $table->decimal('tiempo_empleado', 4)->nullable();
            $table->decimal('tiempo_produccion', 4)->nullable();
            $table->integer('id_estado')->nullable()->default(1)->index('id_estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
