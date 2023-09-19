<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reserve';

    protected $fillable = [
        'id_client',
        'id_room',
         'name',
         'description',
        'star_date',
        'end_date',
        'status_reserve',
        'status',
    ];
}
