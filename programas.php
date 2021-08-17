<?php
session_start();

if (isset($_SESSION['empresa']) || (isset($_SESSION['usuario']))) {
    header('Location programas.php');
}else{
    header('Location: loginpage.php');
}


?>

<?php
if (isset($_SESSION['empresa'])){ ?>

<h1>Olá, <?php echo $_SESSION['empresa']; }?></h1>

<?php
if (isset($_SESSION['usuario'])){ ?>

<h1>Olá, <?php echo $_SESSION['usuario']; }?></h1>

<a href="logout.php">Sair</a>

