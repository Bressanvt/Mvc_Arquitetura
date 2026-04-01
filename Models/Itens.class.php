<?php

class Itens {

    private int $id_itens;
    private int $quantidade;    
    private float $precoUnitario;
 
    

    // construtor
    public function __construct(int $id_itens = 0, string $quantidade = "", string $precoUnitario = ""){
        $this->id_itens = $id_itens;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;

    }
    // exibir usuario
    public function Exibir(){
        echo " $this->id_itens - $this->quantidade - $this->precoUnitario <br>";
    }

    // GET
    public function getId_itens(){
        return $this->id_itens;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function getPrecoUnitario(){
        return $this->precoUnitario;
    }

    // SET
    public function setId_itens(string $id_itens){
        $this->id_itens = $id_itens;
    }

    public function setQuantidade(string $quantidade){
        $this->quantidade = $quantidade;
    }
    
    public function setPrecoUnitario(string $precoUnitario){
        $this->precoUnitario = $precoUnitario;
    }

}
?>