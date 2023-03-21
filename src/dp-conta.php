<?php
require('conexao.php');

$valordc = $_POST['valordc'];
$cpf_conta = $_POST['cpf_conta'];


$query_conta = "SELECT * from cliente WHERE cpf =('$cpf_conta')";
$registro_conta = $conn ->query($query_conta);
$dados;
while ($dados = $registro_conta->fetch_assoc()) {

     $saldo = $valordc + $dados['conta_corrente'];
     if ($registro_conta->num_rows==1) {
        $query_deposito ="UPDATE cliente SET conta_corrente = '$saldo' WHERE cpf ='$cpf_conta'";
        $registro_conta_dp = $conn ->query($query_deposito);

        echo"<script>
     alert('Deposito realisado com sucesso!');
     window.location.href ='../view/deposito-conta.html';

     </script>";
        
     }else{
        echo"<script>
        alert('CPF invalido!');
        window.location.href ='../view/deposito-conta.html';
    
         </script>";
    
    }



}



?>