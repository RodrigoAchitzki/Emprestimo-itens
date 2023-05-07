<?php
include('conexao.php');
include('verifica.php');


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio pagina</title>
    <link rel="stylesheet" href="../css/iniciopagina.css">
</head>

<body>
    <nav>
        <a class="logado">Bem vindo: <?php echo $_SESSION['nome'] ?></a>
        <ul>
            <li><a class="sair" href="logout.php">Sair</a></li>

        </ul>
    </nav>
    <h1>EMPRESTA AI</h1>
    <h2 class="center">Empreste de tudo quando quiser.</h2>
    <ul>
        <li>
            <div class="container">
                <img src="../img/Inicio.jfif" width="500">
                <br>
                <a href="objemp.php"><button class="button">
                        <h2>Objetos Emprestados</h2>
                    </button></a>
            </div>
        </li>
        <li>
            <div class="container">
                <img src="../img/incio2.png" width="450">
                <br>
                <a href="cadastraremp.php"><button class="button">
                        <h2>Emprestar / Cadastrar Objetos</h2>
                    </button></a>
            </div>
        </li>
    </ul>
</body>

</html>