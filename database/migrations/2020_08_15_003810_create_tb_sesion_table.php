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
            $table->smallInteger('Ses_id')->autoIncrement();
            $table->string('title');
            $table->Integer('Ses_Mic_Id_Gen');
            $table->string('Ses_lugar');
            $table->string('color');
            $table->string('textColor');
            $table->dateTime('start');
            $table->dateTime('end');
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
