<?php

    if($_GET)
    {
        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];
        require_once "Controllers/{$controle}.class.php";
        $obj = new $controle();
        $obj->$metodo();
    }
    else
    {
        //incluindo a classe inicioController que está na pasta
        require_once "Controllers/inicioController.class.php";
        //criando um objeto com o modelo (classe) inicioController
        $obj = new inicioController();
        $obj->inicio();
    }

?>