<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cancion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canciones')->insert([
            'titulo_cancion' => 'Rocket Brothers',
            'id_album' => 2,
            'duracion_cancion' => 4.04
        ]);

        DB::table('canciones')->insert([
            'titulo_cancion' => 'Surfing The Warm Industry',
            'id_album' => 2,
            'duracion_cancion' => 3.03
        ]);
        DB::table('canciones')->insert([
            'titulo_cancion' => 'The Aftermath',
            'id_album' => 2,
            'duracion_cancion' => 5.39
        ]);
    }
}
