@extends('layouts.app')
@section('cadastro')
<div class="container mt-5">
    <div class="row row-cols-1">
        <div class="col mx-3">
            <h1 class="text-center">Cadastro de Usuário</h1>
        </div>
        <div class="col col-lg-6 mx-auto table-responsive">
            <form class="row row-cols-1" method="post" action="{{ route('usuarios.novo')}}">
            @csrf
            <div class="col mb-3">
                
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                
            </div>
            <div class="col mb-3">
                
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="login" required>
                
            </div>
            <div class="col mb-3">
                
                <label for="senha">Senha</label>
                <input type="text" class="form-control" id="senha" name="senha" placeholder="senha" required>
                
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-outline-secondary" href="{{ route('usuarios.index')}}">Voltar para lista de Usuarios</a>
            </div>
            </form> 
        </div>
    </div>
</div>
@endsection