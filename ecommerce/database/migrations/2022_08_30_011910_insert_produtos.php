<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(["titulo" => "Geral", "status" => 1]);
        $cat->save();

        $prod = new \App\Models\Produto(["nome" => "Pedra", "preco" => 15.5, "descricao"=> "Uma carrada de pedra comum, é pedra porra!", "un_med" => "ton", "quantidade" => 0, "desconto"=> 0, "status" => 1, "categoria_id" => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(["nome" => "Cascalho", "preco" => 15.5, "descricao"=> "Uma carrada de pedra comum, é pedra porra!", "un_med" => "ton", "quantidade" => 0, "desconto"=> 0, "status" => 1, "categoria_id" => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(["nome" => "Brita", "preco" => 15.5, "descricao"=> "Uma carrada de pedra comum, é pedra porra!", "un_med" => "ton", "quantidade" => 0, "desconto"=> 0, "status" => 1, "categoria_id" => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(["nome" => "Tijolo", "preco" => 15.5, "descricao"=> "Uma carrada de pedra comum, é pedra porra!", "un_med" => "ton", "quantidade" => 0, "desconto"=> 0, "status" => 1, "categoria_id" => $cat->id]);
        $prod->save();
        
        $prod = new \App\Models\Produto(["nome" => "Areia", "preco" => 15.5, "descricao"=> "Uma carrada de pedra comum, é pedra porra!", "un_med" => "ton", "quantidade" => 0, "desconto"=> 0, "status" => 1, "categoria_id" => $cat->id]);
        $prod->save();

        $prod = new \App\Models\Produto(["nome" => "Barro", "preco" => 15.5, "descricao"=> "Uma carrada de pedra comum, é pedra porra!", "un_med" => "ton", "quantidade" => 0, "desconto"=> 0, "status" => 1, "categoria_id" => $cat->id]);
        $prod->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
