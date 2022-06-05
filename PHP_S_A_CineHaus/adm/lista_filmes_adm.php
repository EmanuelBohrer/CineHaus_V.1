<?php
session_start();
include_once "../config/conexao.php";
?>
<html lang="pt-br">
<head>
<title>Lista de Filmes</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/dashboard.css">
<link rel="icon" href="imgs/film-projector.png">


</head>
<body>

<div class="sidenav">
    <a href="../tela_inicial_adm.php">Inicial</a>
  <a href="dashboard_adm.php">Conta</a>
  <a href="lista_filmes_adm.php">Lista de Filmes</a>
  <a href="incluir_filme.php">Incluir Filme </a>
  <br><br><br><br>
  <a href="../includes/logout.php" class="button"> Sair da Conta </a>
</div>

<div class="titulos">
  <h1>Lista de Filmes</h1>
</div>
  <div class="content">
      <p> Busque os filmes que você quiser no nosso sistema! </p>
</div>

</body>
</html>

