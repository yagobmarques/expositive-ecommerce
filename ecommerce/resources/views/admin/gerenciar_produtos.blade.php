@extends('layout')
@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gerenciar Produtos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Descrição
                                </th>
                                <th>
                                    Preço
                                </th>
                                <th>
                                    Quantidade
                                </th>
                                <th>
                                    Categoria
                                </th>
                                <th>
                                    Ações
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($lista as $produto)
                                    <tr>
                                        <td>
                                            {{ $produto->nome }}
                                        </td>
                                        <td>
                                            {{ $produto->descricao }}
                                        </td>
                                        <td>
                                            {{ $produto->preco }}
                                        </td>
                                        <td>
                                            {{ $produto->quantidade }}
                                        </td>
                                        <td>
                                            {{ isset($produto->categoria) ? $produto->categoria['titulo'] : "0" }}
                                        </td>
                                        <td>
                                            <a href="{{ route('novo_produto', $produto->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <a href="{{ route('gerenciar_produtos', ['id' => $produto->id]) }}"
                                                class="btn btn-danger">Deletar</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <a href="{{ route('novo_produto') }}" class="btn btn-primary">Novo</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
