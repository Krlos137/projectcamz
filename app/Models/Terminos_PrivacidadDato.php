<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminos_PrivacidadDato extends Model
{
    use HasFactory;

    protected $table = 'terminos_privacidad_datos';
    protected $fillable = [
        'des_condciones',
        'desc_avisoprivacidad'
    ];
}
