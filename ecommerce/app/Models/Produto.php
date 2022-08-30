<?php

namespace App\Models;

class Produto extends RModel
{
    protected $table = "produtos";
    protected $fillable = ["nome", "categoria_id", "code", "nome", "preco", "descricao", "un_med", "quantidade", "desconto", "status"];
}
