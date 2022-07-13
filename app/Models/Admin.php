<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $apellido2
 * @property $rut
 * @property $email
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Admin extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'apellido2' => 'required',
		'rut' => 'required',
		'email' => 'required',
		'password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido','apellido2','rut','email','password'];



}
