<?php
    require "Produto.php";
    require "Cliente.php";
    require "Pagamento.php";

    class Pedido {
        // Atributo 
        private $id;
        private $data;
        private $quantidade;
        private $produto;
        private $cliente;
        private $pagamento;

        // Método construtor 
        public function __construct($id, $data, $quantidade, Produto $produto, Cliente $cliente, Pagamento $pagamento){
        $this->id = $id;
        $this->data = $data;
        $this->quantidade = $quantidade;
         $this->cliente = $cliente; 
        $this->produto = $produto;
        $this->pagamento = $pagamento;
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
            return $this->produto->getPreco() * $this->quantidade;
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

         public function getCliente() {
            return $this->cliente;
        }

        public function setCliente($cliente) {
            $this->cliente = $cliente;
        }

        public function finalizarPedido(){
            echo "<h2>Pedido Finalizado!!</h3>";
            $this->cliente->imprimir();
            $this->produto->imprimir();
            echo "Quantidade: " . $this->quantidade;
            echo "Valor Total: R$ " . $this->getValor();
            $this->pagamento->realizarPagamento();
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