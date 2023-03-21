<?php
require('conexao.php');

$valor_p = $_POST['valor_p'];
$cpf_conta_p = $_POST['cpf_conta_p'];

 echo $cpf_conta_p;
 $query_saque2 = "SELECT * from cliente WHERE cpf =('$cpf_conta_p')";
 $registro_saque2 = $conn ->query($query_saque2);
 
 if ($registro_saque2->num_rows==0) {
    
    echo"<script>
    alert('CPF invalido!');
    window.location.href ='../view/saque-poupanca.html';
 
    </script>";
 
    
 }
 
 $dados;
 while ($dados = $registro_saque2->fetch_assoc()) {
    if ($valor_p > $dados['conta_poupanca']) {
       echo"<script>
       alert('Saldo Insuficiente!');
       window.location.href ='../view/saque-poupanca.html';
  
       </script>";
    } else {
 
      $saldo =  $dados['conta_poupanca'] - $valor_p ;
      if ($registro_saque2->num_rows==1) {
         $query_saque2 ="UPDATE cliente SET conta_poupanca = '$saldo' WHERE cpf ='$cpf_conta_p'";
         $registro_conta_sp = $conn ->query($query_saque2);
 
         echo"<script>
      alert('Saque  realisado com sucesso!');
      window.location.href ='../view/home.html';
 
      </script>";
         
      }else{
         echo"<script>
         alert('CPF invalido!');
         window.location.href ='../view/saque-poupanca.html';
     
          </script>";
     
     }
    }
 
 
 }
 


?>