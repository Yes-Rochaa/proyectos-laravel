<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $circuito_id
 * @property $name_carre
 * @property $fecha
 * @property $temporada
 * @property $created_at
 * @property $updated_at
 *
 * @property Circuito $circuito
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['circuito_id', 'name_carre', 'fecha', 'temporada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function circuito()
    {
        return $this->belongsTo(\App\Models\Circuito::class, 'circuito_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class, 'id', 'carrera_id');
    }
    
}
