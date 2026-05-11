<?php
   require "Pedido.php";
?>

<h2>Cardápio</h2>
<table border="1" cellpadding="10">
   <tr>
      <th>Produto</th>
      <th>Categoria</th>
      <th>Preço</th>
   </tr>
   <tr>
      <td>Cappuccino</td>
      <td>Cafés</td>
      <td>R$ 12,00</td>
   </tr>
   <tr>
      <td>Latte</td>
      <td>Cafés</td>
      <td>R$ 10,00</td>
   </tr>
   <tr>
      <td>Brownie</td>
      <td>Doces</td>
      <td>R$ 8,00</td>
   </tr>
</table><br><hr>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cafeteria - Fazer Pedido</title>
</head>
<body>
   <h1>Novo Pedido</h1>
   <form action="acao.php" method="post">
      <div>
         <label for="nome">Nome completo: </label> <br>
         <input type="text" name="nome">
      </div>
      <div>
         <label for="cpf">CPF: </label> <br>
         <input type="text" name="cpf">
      </div>

      <h2>Escolha seus Itens</h2>
      <div>
         <label for="produto">Produto: </label> <br>
         <input type="text" name="produto">
      </div>
      <div>
         <label for="quantidade">Quantidade: </label> <br>
         <input type="number" name="quantidade">
      </div>
      <div>
         <input type="reset" value="Limpar"> 
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>