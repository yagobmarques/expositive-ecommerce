<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nome_fantasia")->nullable();
            $table->string("razao_social")->nullable();
            $table->string("cnpj");
            $table->string("telefone")->nullable();
            $table->string("telefone2")->nullable();
            $table->string("email");

            $table->integer("tipo")->nullable();
            $table->integer("status")->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
