<?php

class Vendas {

    private int $id_venda;
    private string $dataVenda;
    
    // construtor
    public function __construct(int $id_venda = 0, string $dataVenda = ""){
        $this->id_venda = $id_venda;
        $this->dataVenda = $dataVenda;
    }
    // exibir usuario
    public function Exibir(){
        echo " $this->id_venda - $this->dataVenda <br>";
    }

    // GET
    public function getId_venda(){
        return $this->id_venda;
    }

    public function getDataVenda(){
        return $this->dataVenda;
    }

    // SET
    public function setId_venda(string $id_venda){
        $this->Id_venda = $id_venda;
    }

    public function setDatavenda(string $dataVenda){
        $this->dataVenda = $dataVenda;
    }
}
?>