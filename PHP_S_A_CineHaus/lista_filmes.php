<?php
session_start();
include_once "../PHP_S_A_CineHaus/config/conexao.php";
?>
<html lang="pt-br">
<head>
<title>Lista de Filmes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dashboard.css">
<link rel="icon" href="imgs/film-projector.png">


</head>
<body>

<div class="sidenav">
  <a href="#">Inicial</a>
  <a href="dashboard_user.php">Conta</a>
  <a href="lista_filmes.php">Lista de Filmes</a>
  <br><br><br><br>
  <a href="includes/logout.php" class="button"> Sair da Conta </a>
</div>

<div class="titulos">
  <h1>Lista de Filmes</h1>
</div>
  <div class="content">
      <p> Busque os filmes que você quiser no nosso sistema! </p>
      
      <?php
      $query_filmes = "SELECT * FROM filmes ORDER BY id";
      
      

$result_dir = $conn ->prepare($query_diretor);
$result_dir ->execute();

$result_filmes = $conn -> prepare($query_filmes);
$result_filmes->execute();

while($lin_dir=$result_dir->fetch(PDO::FETCH_ASSOC)){
    extract($lin_dir);
    echo"*nome_diretor";
    
}
while($row_filmes=$result_filmes->fetch(PDO::FETCH_ASSOC)){
    
    echo"ID do Filme : ".$row_filmes['id']."<br>";
    echo"Nome do Filme : ".$row_filmes['nome_filme'].'<br>';
    echo"Ano : ".$row_filmes['ano']."<br>";
    echo"Ranking : ".$row_filmes['ranking']."<br>";
    echo"Gênero : ".$row_filmes['genero_id']."<br>";
    echo"Diretor : ".$lin_dir['nome_diretor']."<br>";
    echo "<br>";
}
      ?>
</div>

</body>
</html>

