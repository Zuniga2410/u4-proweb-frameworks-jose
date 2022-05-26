<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autor
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $apellidos
 * @property $telefono
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autor extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','apellidos','telefono','direccion'];



}
