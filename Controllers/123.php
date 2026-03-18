<?php
require_once "classes/Categorias.class.php";
require_once "classes/Itens.class.php";
require_once "classes/Produto.class.php";
require_once "classes/Usuarios.class.php";
require_once "classes/Vendas.class.php";

$usuario = new Usuarios(1);

$usuario->setNome("João");
$usuario->setEmail("joao@email.com");
$usuario->setSenha("123456");
$usuario->setPerfil("Comprador");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dados do Usuário</title>
</head>
<body>

<h2>Informações do Usuário</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Perfil</th>
    </tr>

    <tr>
        <td><?= $usuario->getId_usuario(); ?></td>
        <td><?= $usuario->getNome(); ?></td>
        <td><?= $usuario->getEmail(); ?></td>
        <td><?= $usuario->getSenha(); ?></td>
        <td><?= $usuario->getPerfil(); ?></td>
    </tr>
</table>

</body>
</html>
