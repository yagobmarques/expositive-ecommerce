@extends('layout')
@section('conteudo')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <form action="{{ route('salvar_categoria', $categoria['id'] ?? '') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo"
                value="{{ $categoria['titulo'] ?? '' }}" required>
        </div>
        <div class="form-group">
            <label for="ativo" class="switch ">
                <span class="slider round">Ativo</span><br>
                <input type="checkbox" data-toggle="toggle" class="form-control" name="ativo" id="ativo" data-on="I" data-off="O" {{ !isset($categoria) || $categoria['status'] == 1 ? "checked" : ""}}>
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    @endsection
