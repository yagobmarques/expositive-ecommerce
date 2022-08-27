<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("categoria_id")->unsigned()->nullable();
            $table->string("code", 50)->nullable();
            $table->string("nome", 150);
            $table->decimal("preco", 10, 2)->nullable();
            $table->string("descricao", 1000)->nullable();
            $table->string("un_med", 20)->nullable();
            $table->decimal("quantidade", 10, 2)->nullable();
            $table->decimal("desconto", 10, 2)->nullable();
            $table->integer("status")->nullable();
            $table->timestamps();

            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
