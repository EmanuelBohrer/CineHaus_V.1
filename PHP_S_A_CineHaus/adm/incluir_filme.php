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
            <a href="#">Inicial</a>
            <a href="dashboard_adm.php">Conta</a>
            <a href="lista_filmes_adm.php">Lista de Filmes</a>
            <a href="incluir_filme.php">Incluir Filme</a>
            <br><br><br><br>
            <a href="../includes/logout.php" class="button"> Sair da Conta </a>
        </div>

        <div class="titulos">
            <h1>Incluir Filme</h1>
        </div>
        <div class="content">
            <p> Adicionar filmes como ADM </p>

            <form method="POST" action="../config/valida_filme.php">
                <div class="">
                    <label> Nome do Filme : </label>
                    <input type="text" name="nome" required>
                </div>
                <br>
                <div clas="">
                    <label> Ano de lançamento : </label> 
                    <input type="text" name="ano" required> 
                </div>
                <br>
                <div clas="">
                    <label> Ranking : </label> 
                    <input type="number" name="rank" step= 0.01 required> 
                </div>
                <br> 
                <div clas="">
                    <label> Gênero do Filme : </label> 
                    <select name='genero' id='gen'>
                        <option value=''>Selecione</option>
                        <option value='1'>Drama</option>
                        <option value='2'>Ação</option>
                        <option value='3'>Comédia</option>
                        <option value='4'>Romance</option>
                    </select>
                </div>
                <br> 
                <div class=''>
                    <label> Diretor do Filme : </label> 
                    <select name='diretor' id='dir'>
                        <option value=''>Selecione</option>
                        <option value='1'>George Lucas</option>
                        <option value='2'>Robert Eggers</option>
                        <option value='3'>Christopher Nolan</option>
                        <option value='4'>Quentin Tarantino</option>
                    </select>
                </div>
                <br>
                <input type ='submit' name='bt_incluir' value="Incluir Filme">
                
                    <?php
                if (isset($_SESSION['msg'])) {
                    echo  $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>

                
                </div>

                </body>
                </html>

