<?php
include('verificaLogin.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">sair</a></h2>
