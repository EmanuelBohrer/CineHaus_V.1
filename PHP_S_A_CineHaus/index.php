<?php
session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);        
}
include_once'./config/conexao.php';

?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso ao Login</title>
        <link rel="stylesheet" href="css/custom.css"/>
        <link rel="icon" href="imgs/film-projector.png">

        
    </head>
    <body>
        <div class="center">
        <h1>Login</h1>
        <form method="POST" action="config/valida_login.php">
            
            <div class ="txt_field">
            <input type="text" name="usuario" required> 
            <label>User:</label>
            </div>
            
            <div class ="txt_field">
            <input type="password" name="senha" required>
            <label>Senha:</label>
            </div>
            <br>
            
            <input type="submit" name="bt_login" value="Acessar">
            <br>
            <div class ='signup_link'>
                Não tem conta? <a href="adm/cadastrar.php">Cadastrar </a>
            </div>
            <br>
        </form>
        </div>
        
    </body>
</html>
