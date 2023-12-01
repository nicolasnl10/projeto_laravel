@extends('layouts.app')
@section('conteudo')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mb-3">
            <h1 class="text-center">Lista de Produtos</h1>
        </div>
        <div class="col mb-3">
            <div class="d-grid gap-2 d-lg-flex justify-content-lg-start">
                <a class="btn btn-primary" href="{{ route('produtos.cadastro')}}"><i class="bi bi-basket"></i> Cadastrar Novo Produto</a>
                <a class="btn btn-warning" href="{{ route('usuarios.index')}}"><i class="bi bi-people"></i> Listar Usuários</a>
            </div>
        </div>
        <div class="col mb-3 table-responsive">
            <table class="table  align-middle text-center"> 
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->categoria }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{
                            route('produto.atualiza', ['id' => $produto->id]) }}">Alterar</a>
                            <a class="btn btn-danger" href="#" onclick="exclui({{ $produto->id }})">Excluir</a> 
                        </td> 
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-outline-secondary" href="/">Voltar ao home</a>
        </div>
    </div>
</div>
<script>
    function exclui(id) {
        if (confirm('Deseja excluir o produto de id: ' + id + '?')) {
            location.href = '/produto/excluir/' + id;
        }
    }
</script>
@endsection