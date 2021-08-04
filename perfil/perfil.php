<?php
session_start();
if (!isset($_SESSION['usuario'])){
  header('Location: index.php'); 
  exit();
}

$user_s = $_SESSION['usuario'];

include('../conexao.php');

$query1 = "SELECT usuario FROM usuario WHERE usuario = '$user_s'";
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


          <a href="../acao/editarPerfil.php"><img src="../img/edit.png" class="editar"></a>


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
            <div>
                  <a href="../logout.php" class="sair">Sair</a>
            </div>
        </div>    

        <div class="info">
            <div class="info-top"> 
                  <span>Informações</span>
                </div>

          <form action="../acao/atualiza.php" method="POST">

              <div class="info-baixo">
                <div class="email-cont1">
                  <h3 class="email">Nome</h3>
                  <?php if(isset($_SESSION['editar_perfil'])){ ?>
                  <input class="email-b" name="nome_completo" placeholder="<?php echo "$nome_completo" ?>"/>
                  <?php }else{ ?> 
                    <p class="email-b" name="nome_completo"><?php echo "$nome_completo" ?></p>

                   <?php } ?> 

                </div>

                <div class="email-cont">
                  <h3 class="email">Profissao</h3>
                  <?php if(isset($_SESSION['editar_perfil'])){ ?><br>
                  <input class="email-b" name="profissao" placeholder="<?php echo "$profissao" ?>"/>
                  <?php }else{ ?> 
                    <p class="email-b"><?php echo "$profissao" ?></p>

                   <?php } ?> 
                </div>
            </div>

            <div class="info-baixo">
                <div class="email-cont1">
                  <h3 class="email">telefone</h3>
                  <?php if(isset($_SESSION['editar_perfil'])){ ?><br>
                  <input class="email-b" name="telefone" placeholder="<?php echo "$telefone" ?>"/>
                  <?php }else{ ?> 
                    <p class="email-b"><?php echo "$telefone" ?></p>

                   <?php } ?>
            </div>

            <div class="email-cont">
                  <h3 class="email">Email</h3>
                  <?php if(isset($_SESSION['editar_perfil'])){ ?><br>
                  <input class="email-b" name="email" placeholder="<?php echo "$email" ?>"/>
                  <?php }else{ ?> 
                    <p class="email-b"><?php echo "$email" ?></p>

                   <?php } ?>
                  
            </div>



       </div>      

       <?php if(isset($_SESSION['editar_perfil'])){ ?><br>
       <button class="atualiazar">Atualizar</button>
          <?php } ?>

                  </form>

       </div>
    </div>
    </div>
    <div class="credits">
      <a href="../index.php" class="voltar">BugPierce</a>


    </div>
  </div>
</div>


</body>
</html>
