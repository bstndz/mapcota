<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mapcota
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $apellido2
 * @property $rut
 * @property $nacimiento
 * @property $email
 * @property $telefono
 * @property $especialidad
 * @property $ubicacion
 * @property $foto
 * @property $video
 * @property $descripcion
 * @property $titulo
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mapcota extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'apellido2' => 'required',
		'rut' => 'required',
		'nacimiento' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'especialidad' => 'required',
		'ubicacion' => 'required',
		'foto' => 'required',
		'video' => 'required',
		'descripcion' => 'required',
		'titulo' => 'required',
		'password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','apellido2','rut','nacimiento','email','telefono','especialidad','ubicacion','foto','video','descripcion','titulo','password'];



}
