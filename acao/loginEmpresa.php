<?php
session_start();
include('../conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: loginpage.php');
    exit();
}

#o escape_string é bom para proteger contra sqlInjection 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



$query = "SELECT * FROM empresas WHERE nome = '{$usuario}' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);


$row = mysqli_num_rows($result);
 
if($row == 1){
    $_SESSION['empresa'] = $usuario;
    $_SESSION['cnpj'] = $cnpj;
    header('Location: ../index.php');
    exit();
    
}else{
    header('Location: ../empresaLogin.php');
    $_SESSION['nao_autenticado'] = TRUE;
    exit();
}

?>