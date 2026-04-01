<?php

class Categorias {

    private int $id_categoria;
    private string $descritivo;
    
    // construtor
    public function __construct(int $id_categoria = 0, string $descritivo = ""){
        $this->id_categoria = $id_categoria;
        $this->descritivo = $descritivo;
    }
    // exibir usuario
    public function Exibir(){
        echo " $this->id_categoria - $this->descritivo <br>";
    }

    // GET
    public function getId_categoria(){
        return $this->id_categoria;
    }

    public function getDescritivo(){
        return $this->descritivo;
    }

    // SET
    public function setId_categoria(string $id_categoria){
        $this->id_categoria = $id_categoria;
    }

    public function setDescritivo(string $descritivo){
        $this->descritivo = $descritivo;
    }
}
?>