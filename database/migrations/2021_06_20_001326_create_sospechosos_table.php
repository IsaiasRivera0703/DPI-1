<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSospechososTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sospechosos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_inicio');
            $table->string('DNI_sospechoso');
            $table->integer('horas');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('sector');
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
        Schema::dropIfExists('sospechosos');
    }
}
