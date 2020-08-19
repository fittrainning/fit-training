<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSesionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sesion', function (Blueprint $table) {
            $table->bigIncrements('Ses_Pla_id')->references('Mic_Pla_id')->on('tb_microciclo')->onUpdate('cascade');
            $table->tinyInteger('Ses_Mes_id')->references('Mic_Mes_id')->on('tb_microciclo')->onUpdate('cascade');
            $table->tinyInteger('Ses_Mic_id')->references('Mic_id')->on('tb_microciclo')->onUpdate('cascade');
            $table->tinyInteger('Ses_id');
            $table->date('Ses_fecha');
            $table->string('Ses_lugar');
            $table->date('Ses_hora');
            $table->Integer('Ses_volumen');
            $table->Integer('Ses_intensidad');
            $table->string('Ses_calificacion');
            $table->string('Ses_capacidad');
            $table->string('Ses_tipo_preparacion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sesion');
    }
}
