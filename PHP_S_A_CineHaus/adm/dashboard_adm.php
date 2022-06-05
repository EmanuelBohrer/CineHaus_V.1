<?php
session_start();
include_once "../config/conexao.php";
?>
<html lang="pt-br">
<head>
<title>Dashboard do Adm</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/dashboard.css">


</head>
<body>

<div class="sidenav">
    <a href="tela_inicial_adm.php">Inicial</a>
  <a href="dashboard_adm.php">Conta</a>
  <a href="lista_filmes_adm.php">Lista de Filmes</a>
  <a href="incluir_filme.php">Incluir Filme</a>
  <br><br><br><br>
  <a href="../includes/logout.php" class="button"> Sair da Conta </a>
</div>

<div class="titulos">
  <h1>Dashboard do Adm</h1>
</div>
  <div class="content">
      <?php
    echo" <h2> Olá adm ". $_SESSION['nome'].", você acessou com sucesso o login.</h1>";
    echo" <h2> Seu ID é : ".$_SESSION['id']."</h2>";
    echo" <h2> Sua senha é : ".$_SESSION['senha']."</h3>";
    ?>
  
  <p class="texto">Envie sua foto!</p>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="Enviar" name="submit"> Enviar</button>
  </form>
</div>

</body>
</html>

