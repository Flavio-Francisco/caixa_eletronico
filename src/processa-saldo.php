<?php
include('conexao.php');


$cpf_conta = $_POST['cpf_conta'];

$query_saldo = "SELECT * FROM cliente WHERE cpf ='$cpf_conta'";
$resultado_cpf = $conn->query($query_saldo);

if ($resultado_cpf->num_rows == 0) {
    echo"<script>

    alert('CPF Invalido');
    window.location.href ='../view/saldo.html';

     </script>";
    
   
}  



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saldo</title>
</head>
<body>
    <div>
        <?php 
           
           while($cpf = $resultado_cpf->fetch_assoc()) {
            echo$cpf['cpf'];

            $cpf_corrente=$cpf['conta_corrente'];
            $cpf_poupanca=$cpf['conta_poupanca'];

                        
                if ($cpf_conta==$cpf['cpf'] ) {
                    echo"<div> <p> Saldo de Conta Corrente: $cpf_poupanca </p></div>";
                    echo"<div> <p> Saldo da Poupança: $cpf_corrente </p></div>";
                    
                }else{
            
                    echo"cpf errado";
                }
            }
        ?>

    </div>
    
</body>
</html>