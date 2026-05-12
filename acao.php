<?php

if(isset($_POST["cancelar"])){

    echo "<h2 style='color:red'>
            Pedido cancelado com sucesso!
          </h2>";

    exit();
}
   //Incluir os arquivos das classes 
   require "Categoria.php";
   require "Produto.php";
   require "Cliente.php";
   require "Pedido.php";


   $nome = $_POST["nome"];
   $cpf = $_POST["cpf"];
   $nome = $_POST["categoria"];
   $produtoNome = $_POST["produto"];
   $quantidade = $_POST["quantidade"];

   //Instanciar os objetos das classes
   $newCategoria = new Categoria ($nome);
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
      <?php echo $newCliente->getNome(); ?> </p>
      <p><strong>CPF:</strong>
      <?php echo $cpf; ?> </p>
      <p><strong>Categoria:</strong>
      <?php echo $newCategoria->getNome(); ?> </p>
      <p><strong>Produto:</strong>
      <?php echo $produtoNome; ?> </p>
      <p><strong>Quantidade:</strong>
      <?php echo $quantidade; ?> </p>
      <p><strong>Total:</strong>
      <?php echo $newPedido->getValorTotal(); ?> </p>
      <form method="post">
         <input type="submit" name="cancelar" value="Cancelar Pedido">
      </form>
     
   </body>
</html>