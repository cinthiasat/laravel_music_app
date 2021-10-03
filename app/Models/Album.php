<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo_album',
        'nombre_artisata',
        'duracion_album',
        'genero',
        'year',
        'imagen_album'
    ];
    protected $table='albumes';
}
