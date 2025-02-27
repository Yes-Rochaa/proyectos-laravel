<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado
 *
 * @property $id
 * @property $carrera_id
 * @property $piloto_id
 * @property $posicion_final
 * @property $puntos
 * @property $v_completas
 * @property $mejor_vuelta
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property Piloto $piloto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultado extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['carrera_id', 'piloto_id', 'posicion_final', 'puntos', 'v_completas', 'mejor_vuelta', 'estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carrera()
    {
        return $this->belongsTo(\App\Models\Carrera::class, 'carrera_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function piloto()
    {
        return $this->belongsTo(\App\Models\Piloto::class, 'piloto_id', 'id');
    }
    
}
