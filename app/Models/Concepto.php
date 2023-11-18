<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concepto
 *
 * @property $id_concepto
 * @property $codigo_concepto
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingreso[] $ingresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Concepto extends Model
{
    
    static $rules = [
		'id_concepto' => 'required',
		'codigo_concepto' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_concepto','codigo_concepto','nombre','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'concepto', 'id_concepto');
    }
    

}
