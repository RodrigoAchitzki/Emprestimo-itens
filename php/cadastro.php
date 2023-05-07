<?php
include('conexao.php');
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CadastroLogin</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="box">
        <form method="POST" action="cadastro_login.php">
            <fieldset>
                <legend><b>Cadastro Login</b></legend>
                <br>
                <?php
                if(isset($_SESSION['email_existe'])):
                ?>
                <p class="erro">Email informado ja existe!!</p>
                <?php
                endif;
                unset($_SESSION['email_existe']);
                ?>
                <div class="inputbox">
                    <input type="text" name="nome" class="inputUser" required>
                    <label for="nome">Nome Completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="email" name="email" class="inputUser" required>
                    <label for="email">Email</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="password" name="senha" class="inputUser" required>
                    <label for="nome">Senha</label>
                </div>
                <br><a href="home.php"><button class="button">Cadastrar </button></a>
                   
                <br>
            </fieldset>
        </form>
        <?php
        if(isset($_SESSION['status_cadastro'])):
        ?>
        <p class="usuario">Usuário cadastrado com sucesso <a class="sub" href="login.php">Faça seu login</a></p>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>
    </div> 
</body>
</html>