<?php 
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

<!doctype html>
<html>
<head>
<title>Home</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
</head>
<body class="body" id="body">

<?php
    require "montagem/header.php";
?>




    <section class="seguro">
        <div class="seguro-div">
            <h1>
                            Encontre falhas de segurança mais rápido.
                        </h1>


            <p> Os especialistas da plataforma testam as aplicações, em busca de falhas<br>
            antes que pessoas de má-fé encontre-as</p>
       

        </div>

        <div class="seguro-img-div">
            <img src="img/heroi.png" id="img" class="seguro-img">
        </div>
    </section>

        <section class="como">

                <h1>O que é Bug Bounty?</h1>
                <div class="borda-des">
                    <p>Bug Bounty é um programa de recompensa por bugs, é um programa oferecido por<br>
                    organizações nos quais individuos podem receber recompensas por relatar falhas </p>
                </div>
        </section>

    <div id="empresa-desc">
        <section id="como-funciona-empresa">

            <div class="empresa">
                <h1>Como funciona</h1>
            <span id="mudar-esquerda"></span> <h3>Empresa</h3>   <span id="mudar-direita"></span>      
                <h2 class="criacao-text-h2">Criação</h2>        
            </div>
            

            <div class="criacao">
                <p class="criacao-text">Nesta etapa a Empresa vai definir as regras que devem serem cumpridas pelos
                 especialistas, também os escopos para serem testados pelos especialista. Por Exemplo, seu website ou Blog</p>
            </div>

            <div class="publicacao">
            <h2>Publicação</h2>
                <p class="publicacao-text">Depois de criado e definido as regras e os escopos a serem seguidos pelos especialista a empresa deve publicar
                o seu programa, para que os especialista obtenham acesso e assim testar a aplicação </p>
            </div>

            <div class="recompensa">
                    <h2>Recompensa</h2>
                <p class="recompensa-text">O primeiro especialista que encontrar uma vulnerabilidade seguindo as regras implementadas é recompensando, a recompensa
                 é calculada pela empresa levando em conta o risco da falha encontrada.  </p>
            </div>
                

        </section>
    </div>

           <!--especialista -->
           
    <div id="especialista-desc">
        <section id="como-funciona-empresa">

            <div class="empresa">
                <h1>Como funciona</h1>
            <span id="mudar-esquerda-especialista"></span> <h3>Especialista</h3>   <span id="mudar-direita-especialista"></span>      
                <h2 class="criacao-text-h2">Pesquisar</h2>        
            </div>
            

            <div class="criacao">
                <p class="criacao-text">Nesta etapa o especialista devera pesquisar e encontrar o melhor programa que se adequam ao seu perfil
                entendendo as regras colocadas pela empresa e os escopos que deveram ser seguidos</p>
            </div>

            <div class="publicacao">
            <h2>Identificação</h2>
                <p class="publicacao-text">Depois de achar um programa que se pareça confortavel ao seu gosto, o especialista devera começar a 
                Identificar vulnerabilidade existentes nos escopos definidos pela empresa e seguindo as regras</p>
            </div>

            <div class="recompensa">
                    <h2>Analise</h2>
                <p class="recompensa-text">Depois de encontrada a vulnerabilidade, o especialista devera fazer um formulário, falando como ele encontrou 
                aquela falha. Por fim a empresa vai Analisar o formulário e calcular sua recompensa </p>
            </div>
        </section>
    </div>

  <script src="javascript.js"></script>
  <script src="javascript.js"></script>


</body>
</html>
