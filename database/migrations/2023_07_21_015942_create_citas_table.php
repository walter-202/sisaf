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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('servicio_id')->constrained();
            $table->string('motivo');
            $table->string('g_id')->nullable();
            $table->date('date');
            $table->time('time');
            $table->smallInteger('duracion');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('paciente_id')->constrained();
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
        Schema::dropIfExists('citas');
    }
};
