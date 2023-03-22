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
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Saldo</title>
</head>
<body style="background-color:#1693a5;">

    <h1>Saldos</h1>

    <div class="container-saldo">
        <?php 
           $cpf;
           while($cpf = $resultado_cpf->fetch_assoc()) {
            

            $cpf_corrente=$cpf['conta_corrente'];
            $cpf_poupanca=$cpf['conta_poupanca'];

                        
                if ($cpf_conta==$cpf['cpf'] ) {
                    echo"<div>  <h4>Saldo de Conta Poupança:</h4>   <p>  $cpf_poupanca </p></div>";
                    echo"<div> <h5>Saldo de Conta Corrente:</h5> <p>  $cpf_corrente </p></div>";
                    
                }else{
            
                    echo"cpf errado";
                }
            }
          
        ?>
                        <a href="../view/home.html"> Voltar a Tela Inicial</a>
    </div>
    
</body>
</html>