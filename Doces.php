<?php
   require_once "Produto.php";
    class Doces extends Produto{
        private $peso;

        public function __construct ($nome, $preco, $categoria, $peso) {
            parent::__construct($nome,$preco,$categoria);
            $this->peso=$peso;
        }
        
        public function imprimir(){
            parent::imprimir();
                echo "Peso: " . $this->peso . "<br>";
            }
    }
?>