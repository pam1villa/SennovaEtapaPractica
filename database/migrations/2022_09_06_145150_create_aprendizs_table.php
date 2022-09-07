<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendizs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('APREN_Nombre',45);
            $table->integer('APREN_Documento');
            $table->string('APREN_Tipo_Documento',2);
            $table->string('APREN_Genero',15);
            $table->string('APREN_Estado',10);

            $table->string('APREN_Foto',10)->nullable();

            $table->timestamps();
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprendizs');
    }
}
