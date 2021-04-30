<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoHabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_habilidades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_candidato')->nullable();
            $table->unsignedBigInteger('id_habilidad')->nullable();

            $table->foreign('id_candidato')->references('id')->on('candidatos')->onDelete('set null');
            $table->foreign('id_habilidad')->references('id')->on('habilidades')->onDelete('set null');
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
        Schema::dropIfExists('candidato__habilidades');
    }
}
