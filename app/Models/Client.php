<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';

    protected $fillable = [
        'name', // Nombre del cliente
        'email', // Correo electrónico del cliente
        'phone', // Número de teléfono del cliente
        'id_status' // Estado del cliente (activo/inactivo)
    ];

      
}
