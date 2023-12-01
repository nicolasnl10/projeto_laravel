@extends('layouts.app')
@section('alterar')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mx-3">
            <h1 class="text-center">Alteração de Usuários</h1>
        </div>
        <div class="col col-lg-6 mx-auto table-responsive">
            <form class="row row-cols-1" method="post" action="{{ route('usuario.alterar' , ['id' => $u->id]) }}">
            @csrf
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $u ->nome }}">
                    <label for="nome">Nome</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="login" name="login" placeholder="login" value="{{ $u ->login }}">
                    <label for="login">Login</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="senha" value="{{ $u ->senha }}">
                    <label for="senha">Senha</label>
                </div>
            </div>
                <button class="btn btn-success" type="submit">Salvar</button>
            </form> 
        </div>
    </div>
</div>
@endsection