<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("pedido_id")->unsigned()->nullable();
            $table->integer("usuario_id")->unsigned()->nullable();
            $table->integer("empresa_id")->unsigned()->nullable();
            $table->string("logradouro");
            $table->string("numero");
            $table->string("cidade");
            $table->string("estado");
            $table->string("cep");
            $table->string("complemento")->nullable();

            $table->integer("tipo")->nullable();
            $table->integer("status")->nullable();
            $table->timestamps();

            $table->foreign("pedido_id")->references("id")->on("pedidos")->onDelete("cascade");
            $table->foreign("usuario_id")->references("id")->on("usuarios")->onDelete("cascade");
            $table->foreign("empresa_id")->references("id")->on("empresas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
