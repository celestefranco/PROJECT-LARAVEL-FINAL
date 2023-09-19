<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',         // Nombre del servicio
        'description',  // Descripción del servicio (puede ser nula)
        'price',  
        'id_status',      // Precio del servicio
    ];
}
