<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; public $timestamps =true; protected $fillable = ['nombre', 'direccion', 'telefono', 'correo', 'estado', 'rolId' ];
}