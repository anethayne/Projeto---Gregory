<?php
    class Categoria {
        // Atributo 
        private $nome;
        private $listaProdutos = array('Cafés', 'Bebidas', 'Salgados', 'Doces');
        
        // Método construtor 
        public function __construct ($nome) {
            $this->nome = $nome;
        }

        //Métodos de encapsulamento
        public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getListaProdutos() {
        return $this->listaProdutos;
    }

    public function setListaProdutos($listaProdutos) {
        $this->listaProdutos = $listaProdutos;
    }
}