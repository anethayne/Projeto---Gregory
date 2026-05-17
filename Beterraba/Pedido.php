<?php
    class Pedido {
        // Atributo 
        private $id;
        private $data;
        private $valor;
        private $quantidade;
        private $produto;
        private $cliente;

        // Método construtor 
        public function __construct($id, $data, $valor, $quantidade, $produto, $cliente){
        $this->id = $id;
        $this->data = $data;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->produto = $produto;
        $this->cliente = $cliente;
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

         public function getProduto() {
            return $this->produto;
        }

        public function setProduto($produto) {
            $this->produto = $produto;
        }

        public function getValorTotal (){
            $total = $this->valor * $this->quantidade;
            return $total;
        }

         public function getCliente() {
            return $this->cliente;
        }

        public function setCliente($cliente) {
            $this->cliente = $cliente;
        }

        public function mostrarPedido(){
            echo "<h2>Pedido #" . $this->id . "</h2>";
            echo "Cliente: " . $this->cliente->getNome();
            echo "<h3>Produtos:</h3>";
            echo $this->produto->getNomeProduto();
            echo "<h3>Total: R$ " . $this->getValorTotal() . "</h3>";
        }

        public function cancelarPedido () {
            echo "<p style='color: red'>Pedido CANCELADO!!!!";
        }
    }
?>