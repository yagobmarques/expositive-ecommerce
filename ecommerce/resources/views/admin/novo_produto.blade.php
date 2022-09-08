@extends('layout')
@section('conteudo')
    <form action="{{ route('salvar_produto', $produto['id'] ?? '') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"
                value="{{ $produto['nome'] ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descrição"
                value="{{ $produto['descricao'] ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço"
                value="{{ $produto['preco'] ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade"
                value="{{ $produto['quantidade'] ?? '' }}">
        </div>

        <div class="form-group">
            <label for="categoria">Categoria</label><br>
            <select class="form-select" name="categoria" id="categoria" aria-label="Default select example" required>
                <option value="" {{ !isset($produto) ? "selected" : ""}}>Escolha uma opção</option>
                @foreach($categorias as $categoria)
                  <option value="{{$categoria->id}}"  {{ isset($produto) && $produto["categoria"]->id == $categoria->id ? "selected" : ""}}>{{ $categoria->titulo}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="categoria">Imagem:</label>
            <input type="file" class="form-control" name="imagem" id="imagem" placeholder="Imagem">
            <img src="{{ isset($produto['imagem'][0])?  asset($produto['imagem'][0]['url']) : '' }}" alt="" width="100px">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    @endsection

