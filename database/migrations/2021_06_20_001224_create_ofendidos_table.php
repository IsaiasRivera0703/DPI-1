<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofendidos', function (Blueprint $table) {
            $table->id();
            $table->string('IDEM');
            $table->string('DNI_ofendido');
            $table->string('telefono_ofendido');
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
        Schema::dropIfExists('ofendidos');
    }
}
