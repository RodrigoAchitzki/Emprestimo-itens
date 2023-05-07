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
    <br>
    <br>
    <B>
        <h1 align="center">EMPRESTA AI</h1>
    </B>
    <div class="box">
        <form method="POST" action="verifica_login.php">
            <fieldset>

                <legend><b>Login</b></legend>
                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                ?>
                    <p class="erro">As credencias estão incorretas!!</p>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <div class="inputbox">
                    <input type="email" name="email" class="inputUser" required>
                    <label for="email">Email</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="password" name="senha" class="inputUser" required>
                    <label for="nome">Senha</label>
                </div>
                <br>
                <button>Entrar</button>
                <br>
                <p class="usuario"> Não possui uma conta? <a class="sub" href="cadastro.php">Cadastre-se</a></p>
            </fieldset>
        </form>
    </div>
</body>

</html>