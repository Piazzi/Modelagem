<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->decimal('valor',8,2);
            $table->date('data');
            $table->string('descricao')->nullable();

            $table->timestamps();
        });

        Schema::table('entradas', function (Blueprint $table) {
            $table->unsignedInteger('categoria_entrada_id');
            $table->foreign('categoria_entrada_id')->references('id')->on('categoria_entrada')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
}
