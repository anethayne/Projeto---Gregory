<?php
require "Produto.php";
    class Bebidas extends Produto{
        private $tamanhoCopo;
        public function __construct ($nome, $preco, Categoria $categoria, $tamanho){
            parent::__construct ($nome, $preco, $categoria);
            $this->tamanhoCopo= $tamanho;
        }

        public function imprimir(){
            parent::imprimir();
            echo "Tamanho: " . $this->tamanhoCopo;
        }
    } 
?>