<?php
session_start();


include('conexao.php');

if (isset($_SESSION['usuario'])){
    header('Location: index.php'); 
    exit();
}



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
    <link rel="stylesheet" type="text/css" href="css/estiloLogin.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CORES MOBILE-->
        <meta name="msapplication-navbutton-color" content="#75b529">
        <meta name="apple-mobile-web-app-status-bar-style" content="#75b529">
        <meta name="theme-color" content="#75b529">
    
    <!-- FIM CORES MOBILE-->

    
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
              <form action="login.php" method="POST">
                
                <?php
                  if(isset($_SESSION['nao_autenticado'])){

                  
                ?>
                <span id="invalida">ERRO: Usuário ou senha invalidas!</span>

                <?php
                  }elseif(isset($_SESSION['status_cadastro'])){
                ?>
                <span id="valida">Sucesso!: Conta criada com sucesso!</span>

                <?php
                  }
                  unset($_SESSION['nao_autenticado']);
                  unset($_SESSION['status_cadastro']);
                  
                ?>


                  <input class="app-form-control" placeholder="NOME" name="usuario">
                  </div>
                  <div class="app-form-group"> 
                  <input typde="password" type="password" class="app-form-control" id="pronto" placeholder="SENHA" name="senha">
                  </div>

                  <div class="app-form-group buttons">
                  <button class="app-form-button">Entrar</button>
              </form>
              <a href="register.php" class="register">Registrar</a>
            </div>
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
<script src="javascript.js"></script>

</body>
</html>
