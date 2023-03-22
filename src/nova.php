<?php

include('conexao.php');


$nome = $_POST['nome'];
$usuario =$_POST['usuario'];
$senha = $_POST['senha'];
$senhac = $_POST['senhac'];
$cpf = $_POST['cpf'];
$contaP =0;
$contaC =0;

if ($senha == "" || $usuario == ""|| $nome == "" || $cpf == "" )  {
      echo" <script>

      alert('Todos os Campos tem que ser Preenchidos!');
            window.location.href ='../view/nova-conta.html';
      
      </script>";
}

if ($senha != $senhac && $senha > 0)  {
      echo" <script>

      alert('Senhas Não Conferem');
            window.location.href ='../view/nova-conta.html';
      
      </script>";
      
}else{
      $sql="INSERT INTO cliente(nome,usuario,senha,conta_corrente,conta_poupanca,cpf)VALUE('$nome','$usuario','$senha','$contaC','$contaP','$cpf')";
if (mysqli_query($conn, $sql)) {

      echo" <script>

      alert('Usuário Criado Com Suceeso');
            window.location.href ='../view/nova-conta.html';
      
      </script>";
      
} else {
      echo" <script>

      alert('Algo deu errado');
            window.location.href ='./index.html';
      
      </script>";
}
}





?>
