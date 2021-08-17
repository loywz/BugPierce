<?php
session_start();
if ($_SESSION['usuario'] || $_SESSION['empresa']){
    header('Location: programas.php');
    exit();
}else{
    header('Location: index.php');
}

