<?php
   require "Pagamento.php";
      class Pix implements Pagamento{

        public function realizarPagamento(){
            echo "Pagamento realizado via Pix.";
        }
    }
?>