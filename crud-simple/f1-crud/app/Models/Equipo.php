<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $nombre_equipo
 * @property $director
 * @property $fundacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Piloto[] $pilotos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_equipo', 'director', 'fundacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pilotos()
    {
        return $this->hasMany(\App\Models\Piloto::class, 'id', 'equipo_id');
    }
    
}
