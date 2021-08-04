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
    <link rel="stylesheet" type="text/css" href="css/estiloregisterprox.css">

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

            <form action="acao/registrarprox.php" method="POST">

                <input class="app-form-control" placeholder="NOME COMPLETO" name="nome_completo">
                </div>
                <div class="app-form-group"> 
                <input type="text" class="app-form-control" placeholder="EMAIL" name="email">
                <input type="text" class="app-form-control" placeholder="PROFISSÃO" name="profissao">
                <input type="text" class="app-form-control" placeholder="telefone" name="telefone">
                </div>

            <div class="app-form-group buttons">
              <button class="app-form-button">Registrar</button>

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
s