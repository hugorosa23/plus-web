<?php
require '../vendor/init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Cadastro de Usuário - PLUS WEB</title>
    </head>
 
    <body>
 
        <h1>Sistema de Cadastro - PLUS WEB</h1>
 
        <h2>Cadastro de Usuário</h2>
         
        <form action="novo_usuario.php" method="post">
            <label for="name">Nome: </label>
            <br>
            <input type="text" name="nome" id="nome">
 
            <br><br>
            
            <label for="name">Login: </label>
            <br>
            <input type="text" name="login" id="login">
 
            <br><br>
 
            <label for="email">Email: </label>
            <br>
            <input type="text" name="email" id="email">
 
            <br><br>
             
            <label for="name">Senha: </label>
            <br>
            <input type="password" name="senha" id="senha">
 
            <br><br>
            
            <label for="name">Redigite sua Senha: </label>
            <br>
            <input type="password" name="valida_senha" id="valida_senha">
 
            <br><br>
 
            <input type="submit" value="Cadastrar">
        </form>
 
    </body>
</html>