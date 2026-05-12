<?php
    class Pedido {
        // Atributo 
        private $id;
        private $data;
        private $valor;
        private $quantidade;

        // Método construtor 
        public function __construct($id, $data, $valor, $quantidade,){
        $this->id = $id;
        $this->data = $data;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }


        //Métodos de encapsulamento
        public function getId() {
        return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getData() {
            return $this->data;
        }

        public function setData($data) {
            $this->data = $data;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setValor($valor) {
            $this->valor = $valor;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function getValorTotal (){
            $total = $this->valor * $this->quantidade;
            return $total;
        }

        public function mostrarPedido(){
            echo "<h2>Pedido #" . $this->id . "</h2>";
            echo "Cliente: " . $this->id->getNome();
            echo "<h3>Produtos:</h3>";
            echo "<h3>Total: R$ " . $this->getValorTotal() . "</h3>";
        }

        public function cancelarPedido () {
            echo "<p style='color: red'>Pedido CANCELADO!!!!";
        }
    }
?>