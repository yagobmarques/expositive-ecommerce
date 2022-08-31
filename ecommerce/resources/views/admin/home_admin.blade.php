@extends('layout')
@section('conteudo')
    <a href="{{ route('gerenciar_produtos') }}" class="btn btn-primary">Gerenciar Produtos</a>
    <a href="{{ route('gerenciar_produtos') }}" class="btn btn-primary">Gerenciar Categorias</a>
    <a href="{{ route('gerenciar_produtos') }}" class="btn btn-primary">Gerenciar Empresa</a>
@endsection
