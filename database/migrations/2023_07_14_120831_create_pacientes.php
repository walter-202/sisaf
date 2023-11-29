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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('last_name_m')->nullable();
            $table->string('last_name_c')->nullable();
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('sexo');
            $table->string('fecha_de_nacimiento');
            $table->string('ciudad')->nullable();
            $table->string('barrio')->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('grado')->nullable();
            $table->integer('edad')->nullable();
            $table->string('referido')->nullable();
            $table->string('familiar')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
};
