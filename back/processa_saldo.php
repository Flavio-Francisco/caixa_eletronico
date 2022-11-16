<?php
require'../back/banco/conexao.php';


$sql_saldo = "SELECT * FROM cliente WHERE id_saldo ";
$query = mysqli_query($con,$sql_saldo);
$saldo_select = mysqli_fetch_row($query);
$saldo = $saldo_select[0];

?>