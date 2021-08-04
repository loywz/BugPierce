<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estiloProgramas.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Seila</title>
  </head>
  <body>
    <?php include('montagem/header.php') ?>

    <div class="container123">
        <div class="programas-programas">
            <a href="#" class="link-programas">Programas</a>
        </div >        

        <div class="pentesters-pentesters">
            <a href="#" class="link-pentesters">Pentesters</a>
        </div >
    </div>

    <div class="container-programas">
        <div class="programas-no-container">
            <h2 >Programas</h2>
        </div>

        <div class="descricao-programas">
            <p>Encontre o melhor programa para hackear e receber recompensa</p>
        </div>
    </div>

<!-- INICIO TABELA BOO !-->


<?php 

include('conexao.php');


$query = "SELECT * FROM programas";
$result = mysqli_query($conexao, $query);

?>
<div class="seguraa">
        <table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">Programa</th>
        <th scope="col">Reportes</th>
        <th scope="col">Recompensa minima </th>
        <th scope="col">Recompensa maxima </th>
    </tr>
<?php        
if (($result)){
    while($programas = mysqli_fetch_assoc($result)){
      $programa = $programas['programa'];
      $reportes = $programas['num_reports'];
      $min = $programas['rec_min'];
      $max = $programas['rec_max'];  
?>


    </thead>
    <tbody>
    <tr>
        <?php echo "<td><a href='programas/$programa' class='programa-na-lista'>$programa</td></a>" ?>
        <td><?php echo $reportes ?></td>
        <td><?php echo $min ?></td>
        <td><?php echo $max ?></td>
    </tr>


    <?php }
} ?>
    </table>
</div>
<!-- FIM TABELA BOO !-->
  </body>
</html>
