<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Album extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albumes')->insert([
            'titulo_album' => 'Zitilites',
            'nombre_artisata' => 'Kashmir',
            'duracion_album' => 46.50,
            'genero' => 'Trip Hop',
            'year' => '2003-03-03',
            'imagen_album'=>'https://www.discogs.com/es/Kashmir-Zitilites/release/3474333/image/SW1hZ2U6NjU1ODUyMA=='
        ]);
    }
}
