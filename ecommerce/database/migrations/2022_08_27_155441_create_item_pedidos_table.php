<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_pedidos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("pedido_id")->unsigned();
            $table->integer("produto_id")->unsigned();
            $table->double("valor", 10, 2)->nullable();
            $table->integer("quantidade")->nullable();

            $table->integer("status")->nullable();
            $table->timestamps();

            $table->foreign("pedido_id")->references("id")->on("pedidos")->onDelete("cascade");
            $table->foreign("produto_id")->references("id")->on("produtos");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_pedidos');
    }
}
