<?php
   //Incluir os arquivos das classes 
   require "Categoria.php";
   require "Cliente.php";
   require "Pedido.php";
   require "Produto.php";

   //Instanciar os objetos das classes Produto, Vendedor e Comprador
   $newCategoria = new Categoria ("Doces");
   $newCliente = new Cliente ("Leia Organa");
   $newProduto = new Produto ("Bolo de Chocolate", 15.00, $newCategoria);
   $newPedido = new Pedido (1, $newCliente, "04/05/2026", 15.00, $newProduto, 2);

   
   //Concretizar uma venda
   $newCliente->setImprimir();
   $newPedido->realizarPedido();
   $newPedido->getValorTotal();

   //Cancelar uma venda
   $newPedido->cancelarPedido();
?>