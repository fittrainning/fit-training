<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAnamnesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anamnesis', function (Blueprint $table) {
            $table->bigIncrements('Ana_id')->unsigned();
            $table->string('Ana_DepPract');
            $table->string('Ana_depo');
            $table->string('Ana_Logros');
            $table->binary('Ana_Logrosdeportivos');
            $table->binary('Ana_HistorialDeportivo');
            $table->binary('Ana_HistorialMedico');
            $table->binary('Ana_HabitosAlimenticios');
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
        Schema::dropIfExists('tb_anamnesis');
    }
}
