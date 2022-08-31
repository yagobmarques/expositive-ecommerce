@extends('layout')
@section('conteudo')
    <form action="{{ route('salvar_produto') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Categoria">
        </div>
        <div class="form-group">
            <label for="categoria">Imagem: </label>
            <input type="file" class="form-control" name="imagem" id="imagem" placeholder="Imagem">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
@endsection
