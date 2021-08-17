<?php
session_start();
include('../conexao.php');

if (empty($_POST['Rempresa']) || empty($_POST['Rsenha']) || empty($_POST['RRsenha']) || $_POST['Rsenha'] != $_POST['RRsenha'] ){
    header('Location: ../registerEmpresa.php');
    exit();
}

$empresa = mysqli_real_escape_string($conexao, trim($_POST['Rempresa']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['Rsenha'])));


$_SESSION['Rempresa'] = $empresa;
$_SESSION['Rsenha'] = $senha;


$conexao->close();
header('Location: ../registerProxEmpresa.php');
exit;



?>