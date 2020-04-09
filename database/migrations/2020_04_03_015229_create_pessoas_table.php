<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',255);
            $table->string('cpf');
            $table->string('rg');
            $table->string('email');
            $table->string('cep');
            $table->string('logradouro',255);
            $table->string('numero');
            $table->string('complemento');
            $table->string('uf',2);
            $table->string('municipio',255);
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
        Schema::dropIfExists('pessoas');
    }
}
