<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDosificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dosificacion', function (Blueprint $table) {
            $table->Integer('Dos_Id')->autoIncrement();
            $table->smallInteger('Dos_Dosificacion');
            $table->Integer('Dos_Mes_Id_Gen');
            $table->smallInteger('Dos_porcentaje');
            $table->integer('Dos_minutos');
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
        Schema::dropIfExists('tb_dosificacion');
    }
}
