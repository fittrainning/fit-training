<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSeleccioncapacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_seleccioncapacidad', function (Blueprint $table) {
            $table->Integer('Sec_Id')->autoIncrement();
            $table->Integer('Sec_Cap_Id');
            $table->string('Sec_nombre');
            $table->string('Sec_descripcion');
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
        Schema::dropIfExists('tb_seleccioncapacidad');
    }
}
