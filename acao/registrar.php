<?php
session_start();
include('../conexao.php');

if (empty($_POST['Rusuario']) || empty($_POST['Rsenha']) || empty($_POST['RRsenha']) || $_POST['Rsenha'] != $_POST['RRsenha'] ){
    header('Location: ../register.php');
    exit();
}

$_SESSION['fazendo_registro'] = TRUE;


$usuario = mysqli_real_escape_string($conexao, trim($_POST['Rusuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['Rsenha'])));


$_SESSION['usuario_adicionar'] = $usuario;

$sql = "SELECT count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){ 
    $_SESSION['usuario_existe'] = TRUE;
    header('Location: ../register.php');
    exit();
}

$sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$senha')";
 
if($conexao->query($sql) === TRUE){
    $_SESSION['passa'] = TRUE;
}

$_SESSION['apagar'] = $usuario;

copy('../perfil/base.php','../perfil/'.$usuario.'.php'); 
$conexao->close();
header('Location: ../registerprox.php');
exit;



?>