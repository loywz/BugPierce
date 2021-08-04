<?php
require "montagem/header.php";

session_start();
include('conexao.php');


if (isset($_SESSION['apagar'])){
  $apagar = $_SESSION['apagar'];
  $sql = "DELETE FROM usuario WHERE usuario = '$apagar'";
  $result = mysqli_query($conexao,$sql);
  unlink("perfil/".$apagar.".php");
  unset($_SESSION['fazendo_registro']);
  unset($_SESSION['apagar']);
  if($conexao->query($sql) === TRUE){
  
}
  exit();
}


?>
<html>
<header>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/estilopro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

</header>

  <body>
    <section class="sec-mae">
        <div class="img-pro"><img src="img/Safe-bro.png" class="img-pro-img"></div>
        <div class="text-pro">
            <h2>Todos mais seguros!</h2>
            <p>Nosso Objetivo é sempre proporcionar a melhor e mais simples</p>
            <p>interface para você, Profissional ou Empresa. Com o propósito de ser</p>
            <p> mais simples utilizar a plataforma e realizar seu Bounty</p>

            <a href="#" class="venha-pro">Venha fazer parte da nossa plataforma</a>
        </div>

    </section>

  </body>

</html>