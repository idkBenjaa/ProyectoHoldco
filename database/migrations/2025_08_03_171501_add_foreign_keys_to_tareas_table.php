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
        Schema::table('tareas', function (Blueprint $table) {
            $table->foreign(['id_produccion'], 'tareas_ibfk_1')->references(['id'])->on('produccion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_estado'], 'tareas_ibfk_2')->references(['id'])->on('estado')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_maquina'], 'tareas_ibfk_3')->references(['id'])->on('maquinas')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->dropForeign('tareas_ibfk_1');
            $table->dropForeign('tareas_ibfk_2');
            $table->dropForeign('tareas_ibfk_3');
        });
    }
};
