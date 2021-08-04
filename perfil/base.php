<?php
session_start();
if (!isset($_SESSION['usuario'])){
  header('Location: index.php'); 
  exit();
}

$user_s = $_SESSION['usuario'];
include('../conexao.php');

$nome_arquivo = pathinfo(__FILE__ );
$user_real = $nome_arquivo['filename'];

$query1 = "SELECT usuario FROM usuario WHERE usuario = '$user_real'";
$result1 = mysqli_query($conexao, $query1);

if (($result1) and ($result1->num_rows != 0)){
  while($row_usuario = mysqli_fetch_assoc($result1)){
    $usuarioo = $row_usuario['usuario'];

  }

}





$result_info = "SELECT * from info WHERE user = '$usuarioo'";
$resultado_info = mysqli_query($conexao, $result_info);


if (($resultado_info) and ($resultado_info->num_rows != 0)){
  while($row_usuario = mysqli_fetch_assoc($resultado_info)){
    $telefone = $row_usuario['telefone'];
    $email = $row_usuario['email'];
    $profissao = $row_usuario['profissao'];
    $nome_completo = $row_usuario['nome_completo'];
  }
}else{
  echo "deu ruim";
}

$pesquisa = "SELECT * FROM usuario WHERE usuario = '$usuarioo'";
$pesquisa_final = mysqli_query($conexao, $pesquisa);

if (($pesquisa_final));
  while($row = mysqli_fetch_assoc($pesquisa_final)){
    $user = $row['usuario'];
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
    <link rel="stylesheet" type="text/css" href="../css/estiloperfil.css">

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
          <img src="../img/error.png" class="imgerror">
        </div>
      </div>
      <div class="cont-mae">
        <div class="perfil-canto"> 

            <div class="card"> <img src="../img/duck.jpg"> </div>
            <h3 class="nome"><?php echo "$user" ?></h3>
            <h3 class="profissao"><?php echo "$profissao" ?></h3>
                  
        </div>    

        <div class="info">
            <div class="info-top"> 
                  <span>Informações</span>
                </div>

              <div class="info-baixo">
                <div class="email-cont1">
                  <h3 class="email">Nome</h3>
                  <p class="email-b"><?php echo "$nome_completo" ?></p>
                </div>

                <div class="email-cont">
                  <h3 class="email">Profissao</h3>
                  <p class="email-b"><?php echo "$profissao" ?></p>
                </div>
            </div>

            <div class="info-baixo">
                <div class="email-cont1">
                  <h3 class="email">telefone</h3>
                  <p class="email-b"><?php echo "$telefone" ?></p>
            </div>

            <div class="email-cont">
                  <h3 class="email">Email</h3>
                  <p class="email-b"><?php echo "$email" ?></p>
            </div>



       </div>
       </div>
    </div>
    </div>

    <div class="credits">
      <a href="../index.php" class="voltar">BugPierce</a>

      </>
    </div>
  </div>
</div>


</body>
</html>
