<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPlanentrenamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_planentrenamiento', function (Blueprint $table) {
            $table->Integer('Pla_id')->autoIncrement();
            $table->date('Pla_fecini');
            $table->date('Pla_fecfin');
            $table->string('Pla_deporte');
            $table->string('Pla_id_Ent')->references('Ent_Usu_id')->on('tb_entrenador')->onUpdate('cascade');
            $table->string('Pla_id_Dep')->references('Dep_Usu_id')->on('tb_deportistas')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_planentrenamiento');
    }
}
