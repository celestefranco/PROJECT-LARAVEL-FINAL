<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $table='room';

    protected $fillable = [
        'name',
        'description',
        'price_day',
        'price_night',
        'status_room',
        'id_roomtype',
        'id_status',
    ];

    public function roomType()
{
    return $this->belongsTo(RoomType::class, 'id_roomtype');
}

}
