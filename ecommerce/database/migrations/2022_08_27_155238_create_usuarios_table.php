<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nome", 150);
            $table->string("password", 255)->nullable();
            $table->string("email", 255)->nullable();
            $table->string("cpf", 11)->nullable();
            $table->string("cnpj", 14)->nullable();
            $table->string("bio", 200)->nullable();
            $table->string("telefone", 21)->nullable();
            $table->integer("tipo");
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
        Schema::dropIfExists('usuarios');
    }
}
