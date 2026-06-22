<?php
   require "Pagamento.php";
      class Dinheiro implements Pagamento{

        public function realizarPagamento(){
            echo "Pagamento realizado em dinheiro.";
        }
      }
?>