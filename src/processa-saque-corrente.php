<?php
require('conexao.php');

$valorc = $_POST['valor_c'];
$cpf_conta_c = $_POST['cpf_conta_c'];


$query_saque1 = "SELECT * from cliente WHERE cpf =('$cpf_conta_c')";
$registro_saque1 = $conn ->query($query_saque1);
$dados;

if ($registro_saque1->num_rows==0) {
   echo"<script>
   alert('CPF invalido!');
   window.location.href ='../view/saque-corrente.html';

   </script>";
}


while ($dados = $registro_saque1->fetch_assoc()) {

   if ($valorc > $dados['conta_corrente']) {
      echo"<script>
      alert('Saldo Insuficiente!');
      window.location.href ='../view/saque-corrente.html';
 
      </script>";
   } else {
      $saldo =  $dados['conta_corrente'] - $valorc ;
  
   
 
  if ($cpf_conta_c == $dados['cpf'] ) {
     $query_saque ="UPDATE cliente SET conta_corrente = '$saldo' WHERE cpf ='$cpf_conta_c'";
     $registro_conta_sp = $conn ->query($query_saque);

         echo"<script>
      alert('Saque realisado com sucesso!');
      window.location.href ='../view/home.html';

       </script>";
     
  }else{
      echo"<script>
      alert('CPF invalido!');
      window.location.href ='../view/saque-corrente.html';
   
         </script>";
   
 }
}


}

?>