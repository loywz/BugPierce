<?php
  session_start();

?>
<!doctype html>
<html>
<head>
<title>Home</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estiloRegister.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
</head>
<body class="body" id="body">
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <img src="img/error.png" class="imgerror">
        </div>
      </div>
     <div class="screen-body"> 
 
       
          
 
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">

            <form action="acao/registrar.php" method="POST">

            <?php 
              if(isset($_SESSION['usuario_existe'])):

            ?>
              <span id="invalida">ERRO: Usuário Já existe!</span>

            <?php endif; unset($_SESSION['usuario_existe']) ?>
                
            <?php 
              if(isset($_SESSION['status_cadastro'])):

            ?>


            <?php endif; unset($_SESSION['status_cadastro']) ?>


                <input class="app-form-control" placeholder="USUÁRIO" name="Rusuario">
                </div>
                <div class="app-form-group"> 
                <input type="password" class="app-form-control" placeholder="SENHA" name="Rsenha">
                <input type="password" class="app-form-control" placeholder="CONFIRME A SENHA" name="RRsenha">
                </div>

            <div class="app-form-group buttons">
              <button class="app-form-button">Próximo</button>

            </form>

              <a href="loginpage.php" class="register">Login</a>
            </div>
        </div>
      </div>
    </div>
    <div class="credits">
      <a href="index.php" class="voltar">BugPierce</a>

      </>
    </div>
  </div>
</div>


</body>
</html>
