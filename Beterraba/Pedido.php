<?php
    class Pedido {
        // Atributo 
        private $id;
        private $cliente;
        private $data;
        private $valor = 0;
        private $produto;
        private $quantidade;

        // Método construtor 
        public function __construct($id, $cliente, $data, $valor, $produto, $quantidade){
        $this->id = $id;
        $this->cliente = $cliente;
        $this->data = $data;
        $this->valor = $valor;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }


        //Métodos de encapsulamento
        public function getId() {
        return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getCliente() {
            return $this->cliente;
        }

        public function setCliente($cliente) {
            $this->cliente = $cliente;
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

        public function getProdutos() {
            return $this->produtos;
        }

        public function setProdutos($produtos) {
            $this->produtos = $produtos;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function realizarPedido() {
            echo "Pedido " . $this->id . " realizado(a).";
        }

        public function getValorTotal (){
            $total = $this->valor * $this->quantidade;
            return $total;
        }

        public function cancelarPedido () {
            echo "<p style='color: red'>Pedido CANCELADO!!!!";
        }
    }
?>