<?php
require '../back/banco/conexao.php';
require '../back/processa_saldo.php';

$deposito = $_POST['deposito'];
$saldoAtualizado = $deposito + $saldo;

echo $saldoAtualizado;

$sql_deposito = " UPDATE cliente SET id_saldo = '$saldoAtualizado'";
$query = mysqli_query($con,$sql_deposito);


?>