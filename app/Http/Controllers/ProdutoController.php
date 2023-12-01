<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
class ProdutoController extends Controller
{
     //Listar produtos
     public function index(){
        $produtos = Produto::all(); //buscar todos os registro no banco
        return view("produtos.index",compact("produtos"));
    }

    public function cadastro(){
        return view("produtos.cadastro");
    }

    public function novo(Request $req){
        $nome = $req->nome;
        $categoria = $req->categoria;
        $preco = $req->preco;
        $quantidade = $req->quantidade;
        $Produto = new Produto();
        $Produto->nome = $nome;
        $Produto->categoria = $categoria;
        $Produto->preco = $preco;
        $Produto->quantidade = $quantidade;  
        
        if($Produto->save()){
            $mensagem = "Produto $nome inserido com sucesso";
        }else{
            $mensagem = "Não foi possível inserir o novo produto";
        }
        return view("produtos.resultado",compact("mensagem")); 
    }
    
    public function telaAlteracao($id){
        $Produto = Produto::find($id); // find busca o atributo de chave primária
        return view("produtos.alterar", ["u" => $Produto]);
    }

    public function alterar(Request $req, $id){
        $nome = $req->input("nome");
        $categoria = $req->input("categoria");
        $preco = $req->input("preco");
        $quantidade = $req->input("quantidade");

        $Produto = Produto::find($id);
        $Produto->nome = $nome;
        $Produto->categoria = $categoria;
        $Produto->preco = $preco;
        $Produto->quantidade = $quantidade;  

        if ($Produto->save()){
            $msg = "Produto atualizado com sucesso";
        }else{
            $msg = "Produto não foi atualizado";
        }
        return view('produtos.resultado', ['mensagem' => $msg]);
    }

    public function excluir($id){
        $Produto = Produto::find($id);
        
        if($Produto->delete()){ 
            $msg = "Produto excluído com sucesso";
        }else{
            $msg = "Não foi possível excluir o Produto";
        }
        return view("produtos.resultado", ["mensagem"=> $msg]);
    }
}