<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Circuito
 *
 * @property $id
 * @property $nombre_cir
 * @property $pais
 * @property $ciudad
 * @property $longitud_km
 * @property $vultas
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera[] $carreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Circuito extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_cir', 'pais', 'ciudad', 'longitud_km', 'vultas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carreras()
    {
        return $this->hasMany(\App\Models\Carrera::class, 'id', 'circuito_id');
    }
    
}
