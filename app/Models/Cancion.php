<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo_cancion',
        'id_album',
        'duracion_cancion'
    ];
    protected $table='canciones';
}
