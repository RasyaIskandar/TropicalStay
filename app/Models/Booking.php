<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  protected $fillable = [
    'guest_name',
    'gender',
    'id_number',
    'room_id',
    'date_start',
    'duration',
    'breakfast',
    'price',
    'total'
];

public function room()
{
    return $this->belongsTo(Room::class, 'room_id');
}



}
