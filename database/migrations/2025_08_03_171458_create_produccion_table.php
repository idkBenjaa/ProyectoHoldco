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
        Schema::create('produccion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->decimal('tiempo_produccion', 5)->nullable();
            $table->decimal('tiempo_inactividad', 5)->nullable();
            $table->dateTime('fecha_hora_inicio_inactividad')->nullable();
            $table->dateTime('fecha_hora_termino_inactividad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccion');
    }
};
