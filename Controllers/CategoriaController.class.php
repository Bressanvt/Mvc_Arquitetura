<?php 
    require_once "Models/Conexao.class.php";
    require_once "Models/Categoria.class.php";
    class CategoriasController
    {
        public function listar()
        {
            //buscar os dados para apresentação na view
            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->buscartodas();
            echo "<pre>";
            var_dump($retorno);
            echo "</pre>";
            //apresentá-los
        }
    }
?>