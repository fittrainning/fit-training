<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCaracterizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_caracterizacion', function (Blueprint $table) {
            $table->Integer('Car_id')->autoIncrement();
            $table->Integer('Car_deporte');
            $table->string('Car_titulo');
            $table->string('Car_descripcion');
            $table->string('Car_imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_caracterizacion');
    }
}
