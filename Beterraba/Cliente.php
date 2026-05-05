<?php
    class Cliente {
        private $nome;

        public function __construct($nome){
        $this->nome = $nome;
        }
            public function getNome() {
                return $this->nome;
            }

            public function setNome($nome) {
                $this->nome = $nome;
            }

            public function setImprimir() {
                return "Cliente: " . $this->nome;
            }
        }
?>