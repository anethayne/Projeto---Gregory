<?php
   require "Pagamento.php";
     class Cartao implements Pagamento{
    
        public function realizarPagamento(){
            echo "Pagamento realizando com cartão.";
        }
   } 
?>