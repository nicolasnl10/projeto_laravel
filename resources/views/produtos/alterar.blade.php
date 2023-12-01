@extends('layouts.app')
@section('alterar')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mx-3">
            <h1 class="text-center">Alteração de Produtos</h1>
        </div>
        <div class="col col-lg-6 mx-auto table-responsive">
            <form class="row row-cols-1" method="post" action="{{ route('produto.alterar' , ['id' => $u->id]) }}">
            @csrf
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $u ->nome }}">
                    <label for="nome">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria" value="{{ $u ->categoria }}">
                    <label for="categoria">Categoria</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="preco" name="preco" placeholder="preco" value="{{ $u ->preco }}">
                    <label for="preco">Preço</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="quantidade" value="{{ $u ->quantidade }}">
                    <label for="quantidade">Quantidade</label>
                </div>
            </div>
                <button class="btn btn-success" type="submit">Salvar</button>
            </form> 
        </div>
    </div>
</div>
@endsection