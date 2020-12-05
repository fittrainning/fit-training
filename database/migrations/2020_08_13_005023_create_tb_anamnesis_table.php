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
            $table->Integer('Ana_id')->autoIncrement();
            $table->string('Ana_Dep_id');
            $table->string('Ana_DepPract');
            $table->string('Ana_depo');
            $table->string('Ana_Logros');
            $table->string('Ana_Logrosdeportivos');
            $table->string('Ana_HistorialDeportivo');
            $table->string('Ana_HistorialMedico');
            $table->string('Ana_HabitosAlimenticios');
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
