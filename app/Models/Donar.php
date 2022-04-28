<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidoP', 'apellidoM', 'fecha_nacimiento', 'tipo_sangre', 'correo', 'telefono'];
}