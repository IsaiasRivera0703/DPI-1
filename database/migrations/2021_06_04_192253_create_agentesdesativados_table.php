<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentesdesativadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentesdesativados', function (Blueprint $table) {
            $table-> bigIncrements('id');
            $table->integer('id_agente');
            $table->string('area');
            $table->string('placa');
            $table->string('rango');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono');
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
        Schema::dropIfExists('agentesdesativados');
    }
}
