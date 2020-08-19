<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMensajeriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mensajeria', function (Blueprint $table) {
            $table->bigIncrements('Men_id');
            $table->string('Men_em_Usu_id');
            $table->string('Men_re_Usu_id');
            $table->string('Men_Mensaje');
            $table->string('Men_Estado');
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
        Schema::dropIfExists('tb_mensajeria');
    }
}
