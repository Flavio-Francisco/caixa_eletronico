<?php 
require('conexao.php');
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

    // consulta no banco de dados 
$query = "SELECT * from cliente WHERE usuario ='$usuario' AND senha = '$senha' ";
$reg = $conn ->query($query);

    //consultando se ouve retorno na consulta 
   // e redirecionado a pagina

      if ($reg->num_rows==0) {
       echo"<script>

            alert('usuário não existe');
            window.location.href ='../view/fecha-conta.html';
        
             </script>";

        
      }

    // coloca a consulta dentro de um array
    $dados;
while ($dados = $reg->fetch_assoc()) {
  
    $id = $dados['id_cliente'];
                        //deletando a conta      
    if ($dados['usuario'] == $usuario && $dados['senha'] == $senha ) {

        
        $delete = " DELETE FROM cliente WHERE id_cliente = $id ";
        $delete_dados = $conn->query($delete);

        echo"<script>
            alert('Conta fechada com sucesso!');
            window.location.href ='../view/fecha-conta.html';
        
             </script>";



    } else {
       echo"usuario ou senha invalidos";
    }

    session_destroy();
}

?>

