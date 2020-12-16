<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_deportistas', function (Blueprint $table) {
            $table->string('Dep_Usu_id')->primary();
            $table->integer('Dep_estado');
            $table->string('Dep_razon');
            $table->integer('Dep_Cod_Fic');
            $table->integer('Dep_cod_Dee');
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
        Schema::dropIfExists('tb_deportistas');
    }
}
