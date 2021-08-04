<?php
session_start();

if(isset($_SESSION['editar_perfil'])){
    unset($_SESSION['editar_perfil']);
    header('Location: ../perfil/perfil.php');
}else{
    $_SESSION['editar_perfil'] = TRUE;
    header('Location: ../perfil/perfil.php');
}




?>