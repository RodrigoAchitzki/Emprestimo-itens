<?php
include('conexao.php');
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select count(*) as total from cadastro where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['email_existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: cadastro.php');
exit();

?>

