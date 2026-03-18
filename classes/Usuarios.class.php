<?php

class Usuarios {

    private int $id_usuario;
    private string $nome;    
    private string $email;
    private string $senha;
    private string $perfil;
    
    // construtor
    public function __construct(
        int $id_usuario = 0, 
        string $nome = "", 
        string $email = "", 
        string $senha = "", 
        string $perfil = ""
    ){
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->perfil = $perfil;
    }

    // exibir usuario
    public function Exibir(){
        echo "$this->id_usuario - $this->nome - $this->email - $this->senha - $this->perfil <br>";
    }

    // GET
    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getPerfil(){
        return $this->perfil;
    }

    // SET
    public function setId_usuario(int $id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
    
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function setSenha(string $senha){
        $this->senha = $senha;
    }

    public function setPerfil(string $perfil){
        $this->perfil = $perfil;
    }
}

?>