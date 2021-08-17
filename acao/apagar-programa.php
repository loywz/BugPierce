<?php

session_start();
include('../conexao.php');

$nome_programa = $_SESSION['empresa'];



$query = "DELETE FROM
        programas
        WHERE
        programa = '$nome_programa'";

 
if($conexao->query($query) === TRUE){
    header('location ../programateste.php');
}
header('Location: ../programateste.php');
exit();


?>