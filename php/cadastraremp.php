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
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/iniciopagina.css">
    <title>Emprestar Objetos</title>
</head>
<body>
<nav>
    <a class="logado">Bem vindo: <?php echo $_SESSION['nome']?></a>
    <ul>
       <li><a class="sair" href="logout.php">Sair</a></li>
       <li><a class="nav" href="home.php">Home</a></li>
       <li><a class="nav" href="objemp.php">Meus emprestimos</a></li>
    </ul>
</nav>
    <div class="box">
        <form method="POST" action="verifica_emprestimo.php">
            <fieldset>
                <legend><b>Emprestar</b></legend>
                <?php
                if(isset( $_SESSION['obj_emprestado'])):
                ?>
                <p>Objeto já Emprestado</p>
                <?php
                endif;
                unset( $_SESSION['obj_emprestado']);
                ?>
                <div class="inputbox">
                    <input type="text" name="nome_obj" class="inputUser" required>
                    <label for="nome">Nome do Objeto</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="descricao" class="inputUser" required>
                    <label for="descricao">Descrição</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="date" name="data_emp" class="inputUser" required>
                    <label for="data_emp">Data Emprestimo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="date" name="data_dev" class="inputUser" required>
                    <label for="data_dev">Data Devolução</label>
                </div>
                <br>
                    <button>Cadastrar Emprestimo</button>
                <br>
                <?php
                if(isset( $_SESSION['onj_cadastrado'])):
                ?>
                <p>Objeto cadastrado com Sucesso</p>
                <?php 
                endif;
                unset( $_SESSION['onj_cadastrado']);
                ?>
                
            </fieldset>
        </form>
    </div> 
</body>
</html>
