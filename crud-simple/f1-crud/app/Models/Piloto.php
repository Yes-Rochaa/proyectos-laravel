<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piloto
 *
 * @property $id
 * @property $equipo_id
 * @property $nombre_pilot
 * @property $apellido
 * @property $nacimiento
 * @property $nacionalidad
 * @property $n_coche
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piloto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['equipo_id', 'nombre_pilot', 'apellido', 'nacimiento', 'nacionalidad', 'n_coche'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipo()
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'equipo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class, 'id', 'piloto_id');
    }
    
}
