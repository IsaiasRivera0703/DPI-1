<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->integer('anio');
            $table->integer('codigo');
            $table->integer('id_agente');
            $table->integer('id_denunciante');
            $table->integer('id_sospechoso');
            $table->integer('id_ofendido');
            $table->dateTime('fecha_denuncia');
            $table->date('fecha_vencimiento');
            $table->string('tomador_denuncia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncias');
    }
}
