<?php

require_once "classes/Categorias.class.php";
require_once "classes/Itens.class.php";
require_once "classes/Produto.class.php";
require_once "classes/Usuarios.class.php";
require_once "classes/Vendas.class.php";

$usuario = new Usuarios("Usuario_1");

//-------------------------//
echo $usuario->getId_usuario();
echo "<br>";
$usuario->setId_usuario(1);
echo $usuario->getId_usuario();

//-------------------------//
echo $usuario->getNome();
echo "<br>";
$usuario->setNome("João");
echo $usuario->getNome();

//-------------------------//
echo $usuario->getEmail();
echo "<br>";
$usuario->setEmail("joao@email.com");
echo $usuario->getEmail();

//-------------------------//
echo $usuario->getSenha();
echo "<br>";
$usuario->setSenha("123456");
echo $usuario->getSenha();

//-------------------------//
echo $usuario->getPerfil();
echo "<br>";
$usuario->setPerfil("Comprador");
echo $usuario->getPerfil();

//-------------------------//

?>