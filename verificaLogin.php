<?php
session_start();
if (!$_SESSION['usuario']) {
    header('Location: loginpage.php');
    exit();
}

