<?php 
session_start();
include('../conexao.php');

$nome_empresa = mysqli_real_escape_string($conexao, ($_POST['nome_empresa']));
$rec_max = mysqli_real_escape_string($conexao, trim($_POST['rec_max']));
$rec_min = mysqli_real_escape_string($conexao, ($_POST['rec_min']));
$mensagem = mysqli_real_escape_string($conexao, trim($_POST['mensagem']));

$sql = "INSERT INTO programas (rec_min, rec_max, programa) VALUES ('$rec_min', '$rec_max', '$nome_empresa')";

if($conexao->query($sql) === TRUE){
    header('Location: ../programateste.php');
}

?>