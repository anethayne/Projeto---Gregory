<?php
   require "Pedido.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beterraba</title>
</head>
<body>
   <h1>Informações do Pedido</h1>
   <form action="acao.php" method="post">
      <div>
         <label for="nome">Cliente: </label> <br>
         <input type="text" name="nome">
      </div>
      <div>
         <label for="valor">Valor: </label> <br>
         <input type="text" name="valor">
      </div>
      <div>
         <label for="Quantidade">Quantidade: </label> <br>
         <input type="text" name="quantidade">
      </div>

      <div>
         <input type="reset" value="Limpar"> 
         <input type="submit" value="Enviar">
      </div>
   </form>
</body>
</html>