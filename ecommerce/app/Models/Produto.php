<?php

namespace App\Models;

class Produto extends RModel
{
    protected $table = "produtos";
    protected $fillable = ["nome", "categoria_id", "code", "nome", "preco", "descricao", "un_med", "quantidade", "desconto", "status"];

    public function categoria()
    {
        return $this->hasOne(Categoria::class, "id", "categoria_id");
    }

    public function imagem()
    {
        return $this->hasMany(Imagem::class, "produto_id", "id");
    }	
}
