<?php
session_start();
include_once "../PHP_S_A_CineHaus/config/conexao.php";
?>
<html lang="pt-br">
<head>
<title>Dashboard do User</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/dashboard.css">
<link rel="icon" href="imgs/film-projector.png">


</head>
<body>

<div class="sidenav">
    <a href="tela_inicial.php">Inicial</a>
  <a href="dashboard_user.php">Conta</a>
  <a href="lista_filmes.php">Lista de Filmes</a>
  <br><br><br><br>
  <a href="includes/logout.php" class="button"> Sair da Conta </a>
</div>

<div class="titulos">
  <h1>Dashboard do Usuário</h1>
</div>
  <div class="content">
      <?php
    echo" <h2> Olá ". $_SESSION['nome'].", você acessou com sucesso o login.</h1>";
    echo" <h2> Seu ID é : ".$_SESSION['id']."</h2>";
    echo" <h2> Sua senha é : ".$_SESSION['senha']."</h3>";
    ?>
  <p>Para atualizar seu cadastro, verifique por aqui!</p>
</div>

</body>
</html>

