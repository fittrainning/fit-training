<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCapacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_capacidad', function (Blueprint $table) {
            $table->smallInteger('Cap_id')->autoIncrement();
            $table->Integer('Cap_Dos_Id');
            $table->Integer('Cap_Capacidad');
            $table->Integer('Cap_Sec_id');
            $table->Integer('Cap_porcenteja');
            $table->Integer('Cap_tiempo');
            $table->float('Cap_num_ses');
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
        Schema::dropIfExists('tb_capacidad');
    }
}
