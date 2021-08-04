<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: loginpage.php');
    exit();
}

#o escape_string é bom para proteger contra sqlInjection 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);




$row = mysqli_num_rows($result);
 
if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: perfil/perfil.php');
    exit();
    
}else{
    header('Location: loginpage.php');
    $_SESSION['nao_autenticado'] = TRUE;
    exit();
}

?>