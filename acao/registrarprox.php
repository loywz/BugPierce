<?php
session_start();
include('../conexao.php');

if (isset($_SESSION['passa'])){

    if (empty($_POST['email']) || empty($_POST['profissao']) || empty($_POST['telefone']) || empty($_POST['nome_completo']) ){
        header('Location: ../registerprox.php');
        exit();
    }


    $nome_completo = mysqli_real_escape_string($conexao, ($_POST['nome_completo']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $profissao = mysqli_real_escape_string($conexao, ($_POST['profissao']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    $user = $_SESSION['usuario_adicionar'];


    $sql = "INSERT INTO info (nome_completo, telefone, profissao, email, user) VALUES ('$nome_completo', '$telefone', '$profissao', '$email', '$user')";

    if($conexao->query($sql) === TRUE){
        $_SESSION['status_cadastro'] = true;
    }

    $conexao->close();
    header('Location: ../loginpage.php');
    unset($_SESSION['fazendo_cadastro']);
    unset($_SESSION['apagar']);
    unset($_SESSION['usuario_adicionar']);
    exit;
}else{
    header('Location: ../index.php');
}

?>