<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");//A1,A2,B,.......
            $table->text("descripcion");
            $table->text("origen");//   
            $table->text("destino");//
            $table->text("polyline");// array(punto 1.00... ,21545)
            //$table->text("Duracion");// revisar
            $table->unsignedBigInteger('id_horario');
            $table->foreign('id_horario')->references('id')->on('horarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('rutas');
    }
};
