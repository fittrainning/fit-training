<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMicrocicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_microciclo', function (Blueprint $table) {
            $table->Integer('Mic_Id_Gen')->autoIncrement();
            $table->Integer('Mic_Mes_Id_Gen');
            $table->smallInteger('Mic_id');
            $table->string('Mic_tipo');
            $table->date('Mic_dias');
            $table->string('Mic_capacidad');
            $table->string('Mic_duracion');
            $table->smallInteger('Mic_numero_Ses');
            $table->smallInteger('Mic_volumen_micro');
            $table->smallInteger('Mic_intensidad_micro');
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
        Schema::dropIfExists('tb_microciclo');
    }
}
