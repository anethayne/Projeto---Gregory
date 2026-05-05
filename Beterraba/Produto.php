<?php
    class Produto {
        // Atributo 
        private $nomeProduto;
        private $preco;
        private $categoria;
        
        // Método construtor 
        public function __construct ($nomeProduto, $preco, $categoria) {
            $this->nomeProduto = $nomeProduto;
            $this->preco = $preco;
            $this->categoria = $categoria;
        }

        //Métodos de encapsulamento
        public function getNomeProduto() {
        return $this->nomeProduto;
        }

        public function setNomeProduto($nomeProduto) {
            $this->nomeProduto = $nomeProduto;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria) {
            $this->categoria = $categoria;
        }
    }
?>    