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
            $table->integer('puntos_equipo_local')->nullable();
            $table->integer('puntos_equipo_visitante')->nullable();
            $table->string('estado_partido');

            $table->unsignedBigInteger('id_local')->nullable();
            $table->foreign('id_local')->references('id')
                  ->on('equipos')
                  ->onDelete('set null');      

            $table->unsignedBigInteger('id_visitante')->nullable();
            $table->foreign('id_visitante')->references('id')
                  ->on('equipos')
                  ->onDelete('set null');
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
