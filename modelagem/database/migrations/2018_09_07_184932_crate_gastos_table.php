<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->decimal('valor', 8, 2);
            $table->date('data');
            $table->string('descricao', 255)->nullable();
            $table->timestamps();
        });

        Schema::table('gastos', function(Blueprint $table){
            $table->unsignedInteger('categoria_gasto_id');
            $table->foreign('categoria_gasto_id')->references('id')->on('categoria_gasto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos');
    }
}
