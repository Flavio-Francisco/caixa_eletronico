<?php
include('conexao.php');

$usuario1 = $_POST['usuario1'];
$senha1 = $_POST['senha1'];
    //consulta no banco de dadso
$query1 = "SELECT * FROM cliente WHERE usuario ='$usuario1'";
$resul = $conn->query($query1);
if ($resul->num_rows==0) {
  echo"<script>

  alert('Usuário não existe!');
  window.location.href ='../view/login.html';

   </script>";
}


    //colocando dados no ve arrays
$dados;
while ($dados = $resul->fetch_assoc()) {

  // validando o login
  if ($dados['usuario'] == $usuario1 && $dados['senha'] == $senha1) {
    header('Location: ../view/home.html');
  }else{

    echo"<script>
    alert('Senha ou Usuário Incorreto!');
    window.location.href ='../view/login.html';

     </script>";
  }
};
?>