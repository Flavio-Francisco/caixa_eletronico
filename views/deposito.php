<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposito</title>
</head>
<body>
    <header>
        <h1>ADSBank Deposito</h1>
    </header>
    <div>
        <div>
            <div>
                <h2>Digite o Valor do Deposito: </h2>
            </div>
            <div>
                <form action="../back/processa_deposito.php" method="POST">
                    <input type="text" name="deposito" placeholder="digite valor do deposito"><br><br>
                    <input type="submit">
                </form><br><br>
                <a href="../index.html">Voltar a tela inicial</a>
            </div>
        </div>
    </div>
</html>