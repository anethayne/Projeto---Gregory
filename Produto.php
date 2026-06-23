<?php
    class Produto {
        // Atributo 
        protected $nomeProduto;
        protected $preco;
        protected $categoria; //Produto em agregação com Categoria
        
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

        public function imprimir(){
            echo "Produto: " . $this->nomeProduto . "<br>"; 
            echo "Preço: R$ " . $this->preco . "<br>";
            $this->categoria->imprimir();
        }

    }
?>    