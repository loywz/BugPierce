<?php
session_start();
include('../conexao.php');
    $user_ = $_SESSION['usuario'];

if (!empty($_POST['nome_completo'])){
$nome_completo = mysqli_real_escape_string($conexao, ($_POST['nome_completo']));
$sql = "UPDATE info SET nome_completo = '$nome_completo' WHERE user = '$user_'" ;
if($conexao->query($sql) === TRUE){

}
}

if (!empty($_POST['telefone'])){
    $telefone = mysqli_real_escape_string($conexao, ($_POST['telefone']));
    $sql = "UPDATE info SET telefone = '$telefone' WHERE user = '$user_'" ;
    if($conexao->query($sql) === TRUE){

    }
}

if (!empty($_POST['email'])){
    $email = mysqli_real_escape_string($conexao, ($_POST['email']));
    $sql = "UPDATE info SET email = '$email' WHERE user = '$user_'" ;
    if($conexao->query($sql) === TRUE){

    }
}
if (!empty($_POST['profissao'])){
    $profissao = mysqli_real_escape_string($conexao, ($_POST['profissao']));
    $sql = "UPDATE info SET profissao = '$profissao' WHERE user = '$user_'" ;
    if($conexao->query($sql) === TRUE){

    }
}
header('Location: ../perfil/perfil.php');
    
?>