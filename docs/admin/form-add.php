<?php
require '../vendor/init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Plus Web</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="../assets/css/toolkit.css" rel="stylesheet">
        
        <link href="../assets/css/application.css" rel="stylesheet">

        <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
        }
        </style>
    </head>

    <body id="login-bg" style="background-image: url(../assets/img/full_image_2.jpg);" data-stellar-background-ratio="0.5">

    <div class="gradient"></div>
    <div class="container-fluid container-fill-height">
      <div class="container-content-middle">
        <div class="text-wrap">
            

            <div class="py-5">
                <div class="container">
                <div class="row">
                    <div class="align-self-center col-md-6">
                    <h1 class="text-center text-md-left display-3">+PLUS</h1>
                    <p class="lead">Dê um PLUS na sua vida!</p>
                    </div>
                    <div class="col-md-6" id="book">
                    <div class="card">
                        <div class="card-body p-5 bg-light">
                        <h3 class="pb-3 text-green">Criar uma nova conta!</h3>
                        <form action="novo_usuario.php" method="post">
                            <div class="form-group">
                            <input class="form-control" placeholder="Nome" type="text" name="nome" id="nome"> </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="Nome de usuário" type="text" name="login" id="login"> </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="Email" type="email" name="email" id="email"> </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="Senha" type="password" name="senha" id="senha"> </div>
                            <div class="form-group">
                            <input class="form-control" placeholder="Repita a senha" type="password" name="valida_senha" id="valida_senha"> </div>
                            <button type="submit" value="Cadastrar" class="btn app-btn-default">Cadastrar-se</button>
                            <footer class="screen-login">
                                <a href="../login/index.php" class="text-green">Já possui cadastro?</a>
                            </footer>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        
        </div>
      </div>
    </div>


    <script src="../assets/js/jquery.min.js"></script>    
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>

</html>