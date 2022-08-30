@extends('layout')
@section('conteudo')
    @include("_produto", ['lista' => $lista])
@endsection