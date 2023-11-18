<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Egreso
 *
 * @property $id_egreso
 * @property $created_at
 * @property $updated_at
 * @property $beneficiario
 * @property $concepto
 * @property $monto
 * @property $divisa
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Egreso extends Model
{
    
    static $rules = [
		'id_egreso' => 'required',
		'beneficiario' => 'required',
		'concepto' => 'required',
		'monto' => 'required',
		'divisa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_egreso','beneficiario','concepto','monto','divisa'];



}
