<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingreso
 *
 * @property $id_ingreso
 * @property $created_at
 * @property $updated_at
 * @property $estudiante
 * @property $monto
 * @property $concepto
 * @property $divisa
 *
 * @property Concepto $concepto
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingreso extends Model
{
    
    static $rules = [
		'id_ingreso' => 'required',
		'estudiante' => 'required',
		'monto' => 'required',
		'concepto' => 'required',
		'divisa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_ingreso','estudiante','monto','concepto','divisa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function concepto()
    {
        return $this->hasOne('App\Models\Concepto', 'id_concepto', 'concepto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id_estudiante', 'estudiante');
    }
    

}
