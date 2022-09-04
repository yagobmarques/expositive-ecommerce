@extends('layout')
@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gerenciar Categorias</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Id
                                </th>
                                <th>
                                    Titulo
                                </th>
                                <th>
                                    Ativo
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($lista as $categoria)
                                    <tr>
                                        <td>
                                            {{ $categoria->id }}
                                        </td>
                                        <td>
                                            {{ $categoria->titulo }}
                                        </td>
                                        <td>
                                            {{ $categoria->status == 1 ? "Sim" : "Não" }}
                                        </td>
                                        <td>
                                            <a href="{{ route('nova_categoria', $categoria->id) }}"
                                                class="btn btn-primary">Editar</a>
                                            <a href="{{ route('gerenciar_produtos', ['id' => $categoria->id]) }}"
                                                class="btn btn-danger">Deletar</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <a href="{{ route('nova_categoria') }}" class="btn btn-primary">Novo</a>
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
