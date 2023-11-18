<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id_estudiante
 * @property $cedula
 * @property $nombre
 * @property $apellido
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingreso[] $ingresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'id_estudiante' => 'required',
		'cedula' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_estudiante','cedula','nombre','apellido'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'estudiante', 'id_estudiante');
    }
    

}
