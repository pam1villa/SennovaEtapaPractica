<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentroFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_formacions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('CENTR_Nombre',45);

            $table->unsignedBigInteger('id_regional');
            $table->foreign('id_regional')->references('id')->on('regionals');

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
        Schema::dropIfExists('centro_formacions');
    }
}
