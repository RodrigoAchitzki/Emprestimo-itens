<?php

$usuario = "root";
$senha = "";
$host = "localhost";
$database = "emprestimo";

$conexao = mysqli_connect($host, $usuario, $senha, $database);

// if(!$conexao){
//     die("Falha na conexão: " . mysqli_connect_error());
// }else{
//     echo "Conexão realizada com sucesso!";
// }
?>