<?php ?> 

<!doctype html>
<html>
<head>
<title>Sobre</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<body>


       <header class="menu">
            <div class="menu-div">
                <div class="logo">
                    <a href="#"><img src="img/logorec.png" class="logoimg"> </a>
                </div>

                <nav id="nav">
                    <button id="btn-mobile">Menu 
                     <span id="hamburger"><span>
                     </button>
                <ul class="nav" id="menu">
                    <li><a href="index.php" class="home">Home </a></li>
                    <li><a href="programas.php" class="programas">Programas </a></li>
                    <li><a href="proposito.php" class="proposito">Propósito </a></li>
                    <li >

                    <?php
                    if (isset($_SESSION['usuario'])) {
                        
                    ?>
                        <a href="perfil/perfil.php" class="botao-entrar" id="teste123"><?php echo $_SESSION['usuario'] ?>
                    <?php
                    }else{
                    ?>
                        <a href="loginpage.php" class="botao-entrar" id="teste123">Entrar
                    <?php
                    }
                   ?> 


                    


                    </a></li>
                </ul>
                </nav>
            </div>
        </header>


  <script src="javascriptM.js"></script>
  

</body>
</html>
