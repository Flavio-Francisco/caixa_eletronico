<?php
require('conexao.php');

$valordp = $_POST['valordp'];
$cpf_conta = $_POST['cpf'];


$query_poupanca = "SELECT * from cliente WHERE cpf =('$cpf_conta')";
$registro_poupanca = $conn ->query($query_poupanca);
$dados;
while ($dados = $registro_poupanca->fetch_assoc()) {

     $saldo = ($valordp / 100 )*6 + $dados['conta_poupanca'] + $valordp;

     if ($registro_poupanca->num_rows==1) {
        $query_poupanca_dp ="UPDATE cliente SET conta_poupanca = '$saldo' WHERE cpf ='$cpf_conta'";
        $registro_conta_dp = $conn ->query($query_poupanca_dp);

        echo"<script>
     alert('Deposito realisado com sucesso!');
     window.location.href ='../view/home.html';

     </script>";
        
     }else{
        echo"<script>
        alert('CPF invalido!');
        window.location.href ='../view/deposito-poupanca.html';
    
         </script>";
    
    }



}


?>