<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albumes', function (Blueprint $table){
            $table->id();
            $table->string('titulo_album');
            $table->string('nombre_artisata');
            $table->double('duracion_album');
            $table->string('genero');
            $table->date('year');
            $table->string('imagen_album');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
