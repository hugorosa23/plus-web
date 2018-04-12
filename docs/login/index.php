<?php
session_start();
 
require '../vendor/init.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Login
      
    </title>

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
          <div class="text-inner">
            <form role="form" class="mx-auto text-center app-login-form" method="POST" action="login.php">
              
              <img src="../assets/img/logo.png" class="app-brand mb-5" alt="brand">

              <div class="form-group">
                <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="">
              </div>

              <div class="form-group mb-3">
                <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
              </div>

              <div class="mb-5 form-inline">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description text-white">Lembrar Senha</span>
                </label>
                <button id="entrar" name="entrar" class="btn btn-dark" style="float:right">Entrar</button>
              </div>

              <footer class="screen-login">
                <a href="../admin/form-add.php" class="text-white">Não possui cadastro?</a>
              </footer>
            </form>
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

