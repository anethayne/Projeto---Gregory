<?php
    class Categoria {
        // Atributo 
        private $nome;
        
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

    public function imprimir(){
        echo "Categoria: " . $this->nome;
    }
}