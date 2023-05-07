<<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: home.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT id, nome, email from cadastro where email = '{$email}' and senha = '{$senha}'";
$result = mysqli_query($conexao, $query);
$user = mysqli_fetch_assoc($result);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $user['email'];
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    header('Location: home.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit();
}
?>