<?php
   //Incluir os arquivos das classes 
   require "Categoria.php";
   require "Produto.php";
   require "Cliente.php";
   require "Pedido.php";

   $nome = $_POST["nome"];
   $cpf = $_POST["cpf"];
   $produtoNome = $_POST["produto"];
   $quantidade = $_POST["quantidade"]

   //Instanciar os objetos das classes
   $newCategoria = new Categoria ("Doces", "Cafés", "Salgados");
   $newCliente = new Cliente ($nome, $cpf);
   $newProduto = new Produto ($produtoNome, 15.00, $newCategoria);
   $newPedido = new Pedido (1, date("d/m/y"), 15.00, $quantidade);
?>
<html>
   <head>
      <title>Pedido</title>
   </head>
   <body>
      <h1>Pedido Realizado com Sucesso!</h1>
      <p><strong>Cliente:</strong>
      <?php echo $nome; ?> </p>
      <p><strong>CPF:</strong>
      <?php echo $cpf; ?> </p>
      <p><strong>Produto:</strong>
      <?php echo $produtoNome; ?> </p>
      <p><strong>Quantidade:</strong>
      <?php echo $quantidade; ?> </p>
      <p><strong>Total:</strong>
      <?php echo $newPedido->getValorTotal(); ?> </p>
   </body>
</html>