<?php

session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="../css/custom.css">
        <link rel="icon" href="imgs/film-projector.png">
    </head>
    <body>  
        <div class="center">
        <h1>Cadastrar no CineHaus</h1>
        <form method="POST" action="../config/valida_cadastro.php">
            
            <!-- Nome de Usuário -->
            <div class ="txt_field">
            <input type="text" name="nome" required> 
            <label>User:</label>
            </div>
            
            <!-- Email do Usuário -->
            <div class ="txt_field">
            <input type="text" name="email" required>
            <label>Email:</label>
            </div>
            
            <!-- Senha do Usuário -->
            <div class ="txt_field">
            <input type="password" name="senha" required>
            <label>Senha:</label>
            </div>
            
            <!-- Telefone do Usuário -->
            <div class="txt_field">
            <input type="txt" name="fone" required>
            <label>Telefone:</label>
            </div>
           
            
            
            <input type="submit" name="bt_cadastrar" value="Cadastrar">
            
            <div class="signup_link">
            <a href="../index.php">Voltar ao login </a>
            </div>
           
            
        </form>
        </div>
        
    </body>
</html>