<?php
include('conexao.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/iniciopagina.css">
    <title>Meus Objetos</title>
</head>
<body>
<nav>
    <a class="logado">Bem vindo: <?php echo $_SESSION['nome']?></a>
    <ul>
       <li><a class="sair" href="logout.php">Sair</a></li>
       <li><a class="nav" href="home.php">Home</a></li>
       <li><a class="nav" href="cadastraremp.php">Cadastrar Emprestimos</a></li>
    </ul>
</nav>
    <b><H1 align="center">Lista de Objetos Emprestados</H1></b>
    <table>
        <tr>
            <td>Nome Objeto</td>
            <td>Descrição</td>
            <td>Usuário</td>
            <td>Data Emprestimo</td>
            <td>Data Devolução</td>
        </tr>
        
        <?php
            include('conexao.php');
            $nome = $_SESSION['nome'];
            $sql = "select * from emprestimo where usuario = '$nome'";
            // $sql = "select * from emprestimo";
            $result = mysqli_query($conexao, $sql);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row['nome_obj']."</td>";
                echo "<td>".$row['descricao']."</td>";
                echo "<td>".$row['usuario']."</td>";
                echo "<td>".$row['data_emp']."</td>";
                echo "<td>".$row['data_dev']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>