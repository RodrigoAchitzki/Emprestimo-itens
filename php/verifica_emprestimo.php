<?php
include('conexao.php');
session_start();

$nomeobj = $_POST['nome_obj'];
$descricao = $_POST['descricao'];
$dataemp = $_POST['data_emp'];
$datadev = $_POST['data_dev'];
$nome = $_SESSION['nome'];

$sql = "select count(*) as total from emprestimo where nome_obj = '$nomeobj'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['obj_emprestado'] = true;
    header('Location: cadastraremp.php');
    exit();
}

$sql = "INSERT INTO emprestimo(nome_obj, usuario, descricao, data_emp, data_dev) 
values('$nomeobj', '$nome', '$descricao', '$dataemp', '$datadev')";

if($conexao->query($sql) === TRUE){
    $_SESSION['onj_cadastrado'] = true;
}

$conexao->close();
header('Location: cadastraremp.php');
exit();

?>


