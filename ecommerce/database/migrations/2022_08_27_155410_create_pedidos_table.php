<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("usuario_id")->unsigned()->nullable();
            $table->dateTime('realizado')->nullable();
            $table->double("total", 10, 2)->nullable();

            $table->integer("passo")->nullable();
            $table->integer("tipo")->nullable();
            $table->integer("status")->nullable();
            $table->timestamps();

            $table->foreign("usuario_id")->references("id")->on("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
