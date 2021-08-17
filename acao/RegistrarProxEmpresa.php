<?php
session_start();
include('../conexao.php');



if (empty($_POST['cnpj']) || empty($_POST['email']) || empty($_POST['comercio']) || empty($_POST['telefone']) ){
    header('Location: ../registerProxEmpresa.php');
    exit();
}

$cnpj = mysqli_real_escape_string($conexao, ($_POST['cnpj']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$comercio = mysqli_real_escape_string($conexao, ($_POST['comercio']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

$empresa = $_SESSION['Rempresa'];
$senha = $_SESSION['Rsenha'];



$sql = "INSERT INTO empresas(cnpj, comercio, email, telefone, senha, nome) VALUES ('$cnpj', '$comercio', '$email', '$telefone', '$senha', '$empresa')";

if($conexao->query($sql) === TRUE){
    header('Location: ../index.php');

}



exit;


?>