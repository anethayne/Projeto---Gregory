<?php

if(isset($_POST["cancelar"])){

    echo "<h2 style='color:red'>
            Pedido cancelado com sucesso!
          </h2>";

    exit();
}
   //Incluir os arquivos das classes 
   require_once "Categoria.php";
   require_once "Produto.php";
   require_once "Cliente.php";
   require_once "Pedido.php";
   require_once "Pagamento.php";
   require_once "Cartao.php";
   require_once "Pix.php";
   require_once "Dinheiro.php";
   require_once "Bebidas.php";
   require_once "Doces.php";

   
   $nome = $_POST["nome"];
   $cpf = $_POST["cpf"];
   $categoria = $_POST["categoria"];
   $produtoNome = $_POST["produto"];
   $quantidade = $_POST["quantidade"];
   $pagamentoTipo = $_POST["pagamento"];

   if($pagamentoTipo == "pix"){
      $pagamento = new Pix();
   }elseif ($pagamentoTipo == "cartao"){
      $pagamento = new Cartao();
   }else{
      $pagamento = new Dinheiro();
   }

   //Instanciar os objetos das classes
   $newCategoria = new Categoria ($categoria);
   $newCliente = new Cliente ($nome, $cpf); 
   if ($categoria == "Bebidas"){
      $newProduto = new Bebidas($produtoNome, 15.00, $newCategoria, "300ml");
   }elseif ($categoria == "Doces") {
      $newProduto = new Doces ($produtoNome, 15.00, $newCategoria, "200g");
   }else{
      $newProduto = new Produto ($produtoNome, 15.00, $newCategoria);
   }
   $newPedido = new Pedido (1, date("d/m/y"), $quantidade, $newProduto, $newCliente, $pagamento);
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
      <p><strong>Produto:</strong>
      <?php echo $produtoNome; ?> </p>
      <p><strong>Categoria:</strong>
      <?php echo $newCategoria->getNome(); ?> </p>
      <p><strong>Quantidade:</strong>
      <?php echo $quantidade; ?> </p>
      <p><strong>Forma de Pagamento:</strong>
      <?php echo $pagamentoTipo; ?> </p>
      <p><strong>Total:</strong>
      <?php echo $newPedido->getValor(); ?> </p>
      <form method="post">
         <input type="submit" name="cancelar" value="Cancelar Pedido">
      </form>

      <?php
         $newPedido->mostrarPedido();
      ?>
     
   </body>
</html>