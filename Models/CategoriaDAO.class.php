<?php

    class CategoriaDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }
        public function Inserir(){

        }
        public function Alterar(){

        }
        public function Excluir(){

        }
        public function BuscarTodas()
        {
            
            $sql = "SELECT * FROM categorias";
            try
            {   //preparar a frase sql para evitar a injecao SQL
                $stm = $this->db->prepare($sql);
                //executar
                $stm->execute();
                //fechar a conexão
                $this->db =null;
                return "Problema ao buscar as categorias";
                // return $stm->fetchAll(PDO::FETCH_OBJ);
            }            
            catch(PDOException $e){

            }
        }
        public function BuscarUma(){

        }
    }

?>