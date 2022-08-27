<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagems', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("categoria_id")->unsigned()->nullable();
            $table->integer("produto_id")->unsigned()->nullable();
            $table->integer("empresa_id")->unsigned()->nullable();
            $table->string("url");
            $table->integer("tipo")->nullable();
            $table->integer("status")->nullable();
            $table->timestamps();

            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");
            $table->foreign("produto_id")->references("id")->on("produtos")->onDelete("cascade");
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
        Schema::dropIfExists('imagems');
    }
}
