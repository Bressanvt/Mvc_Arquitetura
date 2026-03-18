<?php

class Produtos {

    private int $id_produto;
    private string $nome;    
    private string $descricao;
    private int $estoque;
    private float $preco;
    

    // construtor
    public function __construct(int $id_produto = 0, string $nome = "", string $descricao = "", string $estoque = "", string $preco = ""){
        $this->id_produto = $id_produto;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    // exibir usuario
    public function Exibir(){
        echo " $this->id_produto - $this->nome - $this->email - $this->estoque - $this->perfil  <br>";
    }

    // GET
    public function getId_produto(){
        return $this->id_produto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function getPreco(){
        return $this->preco;
    }



    // SET
    public function setId_produto(string $id_produto){
        $this->id_produto = $id_produto;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
    
    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }

    public function setEstoque(string $estoque){
        $this->estoque = $estoque;
    }

    public function setPreco(string $preco){
        $this->preco = $preco;
    }
}
?>