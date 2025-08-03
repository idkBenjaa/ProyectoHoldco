<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produccion;
use App\Models\Maquinas;
use App\Models\Estado;

class Tareas extends Model
{
    protected $table = 'tareas';

    protected $guarded = ['*'];

    public $timestamps = false;

    public function produccion()
    {
        return $this->belongsTo(Produccion::class, 'id_produccion');
    }

    public function maquinas()
    {
        return $this->belongsTo(Maquinas::class, 'id_maquina');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
