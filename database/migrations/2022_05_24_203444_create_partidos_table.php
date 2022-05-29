<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha');
            $table->time('hora');
            $table->integer('puntos_equipo_local');
            $table->integer('puntos_equipo_visitante');
            $table->enum('estado_partido', ['jugado', 'pendiente', 'suspendido']);
            $table->foreignId('id_equipo_local');
            $table->foreignId('id_equipo_visitante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
}
