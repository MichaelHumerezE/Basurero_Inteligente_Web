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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellidos')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('ci')->unique()->nullable();
            $table->char('sexo')->nullable();
            $table->integer('phone')->unique()->nullable();
            $table->string('domicilio')->nullable();
            $table->smallInteger('estado')->nullable();

            //VECINO
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->unsignedBigInteger('id_ruta')->nullable(); //Ruta a la que pertenece

            //PERSONAL
            $table->string('licencia')->nullable();
            $table->string('cargo')->nullable();
            $table->string('sueldo')->nullable();
            $table->string('descripcion')->nullable();
            $table->smallInteger('tipoc')->nullable();
            $table->smallInteger('tipoe')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
