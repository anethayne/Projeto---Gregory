<?php
   require "Pedido.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cafeteria - Cadastro do Pedido</title>
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
      <div>
         <label for="produto">Produto: </label> <br>
         <input type="text" name="produto">
      </div>
      <label for="categoria"> Categoria: </label> <br>
      <input type="radio" name="categoria">
        <label for="bebidas">Bebidas</label>
      <input type="radio" name="categoria" value="doces">
        <label for="doces">Doces</label>
      <div>
         <label for="quantidade">Quantidade: </label> <br>
         <input type="number" name="quantidade">
      </div>
      <label>Forma de pagamento:</label><br>
      <select name="pagamento">
         <option value="pix">Pix</option>
         <option value="cartao">Cartão</option>
         <option value="dinheiro">Dinheiro</option>
      </select>
      <div>
         <input type="reset" value="Limpar">  
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>