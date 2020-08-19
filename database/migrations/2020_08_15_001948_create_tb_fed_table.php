<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbFedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_fed', function (Blueprint $table) {
            $table->string('Fed_cod');
            $table->string('Fed_nombre');
            $table->string('Fed_tipo');
            $table->string('Fed_jornada');
            $table->string('Fed_id_Dir')->references('Dir_Usu_id')->on('tb_director')->onUpdate('cascade');
            $table->string('Fed_id_Ent')->references('Ent_Usu_id')->on('tb_entrenador')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_fed');
    }
}
