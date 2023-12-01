@extends('layouts.app')
@section('cadastro')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mx-3">
            <h1 class="text-center">Cadastro de Produto</h1>
        </div>
        <div class="col col-lg-6 mx-auto table-responsive">
            <form class="row row-cols-1" method="post" action="{{ route('produtos.novo')}}">
            @csrf
            <div class="col mb-3">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            </div>
            <div class="col mb-3">
                    <label for="categoria">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria" required>
            </div>
            <div class="col mb-3">
                    <label for="preco">Preço</label>
                    <input type="number" class="form-control" id="preco" name="preco" placeholder="preco" required>
            </div>
            <div class="col mb-3">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade" required>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-outline-secondary" href="{{ route('produtos.index')}}">Voltar a lista de Produtos</a>
            </div>
            </form> 
        </div>
    </div>
</div>
@endsection