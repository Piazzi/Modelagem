<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('carteira_de_trabalho')->nullable();
            $table->string('logradouro', 255)->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro', 255)->nullable();
            $table->string('cidade', 255)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('nacionalidade', 50)->nullable();
            $table->decimal('salario_base', 6, 2);
            $table->timestamps();
        });

        Schema::table('funcionarios', function (Blueprint $table) {
            $table->unsignedInteger('cargo_id');

            $table->foreign('cargo_id')->references('id')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
